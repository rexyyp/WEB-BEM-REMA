<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Total berita dari database
        $totalBerita = Berita::count();
        
        // Total views dari semua berita
        $totalViews = Berita::sum('views') ?? 0;
        
        // Berita bulan ini
        $monthlyBerita = Berita::whereMonth('created_at', Carbon::now()->month)
                              ->whereYear('created_at', Carbon::now()->year)
                              ->count();
        
        // Latest berita untuk tabel
        $latestBerita = Berita::latest('created_at')->limit(5)->get();
        
        // Data untuk chart - Monthly (12 bulan terakhir)
        $monthlyStats = $this->getMonthlyStats();
        
        // Data untuk chart - Weekly (8 minggu terakhir)
        $weeklyStats = $this->getWeeklyStats();
        
        return view('admin.dashboard.index', compact(
            'totalBerita',
            'totalViews',
            'monthlyBerita',
            'latestBerita',
            'monthlyStats',
            'weeklyStats'
        ));
    }
    
    private function getMonthlyStats()
    {
        $stats = [];
        
        for ($i = 11; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $month = $date->format('M');
            
            $views = Berita::whereMonth('created_at', $date->month)
                          ->whereYear('created_at', $date->year)
                          ->sum('views') ?? 0;
            
            $stats[] = [
                'label' => $month,
                'value' => $views
            ];
        }
        
        return $stats;
    }
    
    private function getWeeklyStats()
    {
        $stats = [];
        
        for ($i = 7; $i >= 0; $i--) {
            $startOfWeek = Carbon::now()->subWeeks($i)->startOfWeek();
            $endOfWeek = Carbon::now()->subWeeks($i)->endOfWeek();
            
            $label = 'W' . $startOfWeek->weekOfYear;
            
            $views = Berita::whereBetween('created_at', [$startOfWeek, $endOfWeek])
                          ->sum('views') ?? 0;
            
            $stats[] = [
                'label' => $label,
                'value' => $views
            ];
        }
        
        return $stats;
    }
    
    public function exportStats(Request $request)
    {
        $type = $request->get('type', 'monthly'); // monthly or weekly
        
        if ($type === 'weekly') {
            $stats = $this->getWeeklyStats();
            $filename = 'weekly-stats-' . Carbon::now()->format('Y-m-d') . '.csv';
        } else {
            $stats = $this->getMonthlyStats();
            $filename = 'monthly-stats-' . Carbon::now()->format('Y-m-d') . '.csv';
        }
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];
        
        $callback = function() use ($stats, $type) {
            $file = fopen('php://output', 'w');
            
            // Header
            if ($type === 'weekly') {
                fputcsv($file, ['Week', 'Total Views']);
            } else {
                fputcsv($file, ['Month', 'Total Views']);
            }
            
            // Data
            foreach ($stats as $stat) {
                fputcsv($file, [$stat['label'], $stat['value']]);
            }
            
            fclose($file);
        };
        
        return response()->stream($callback, 200, $headers);
    }
}
