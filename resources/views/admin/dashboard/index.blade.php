<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - BEM REMA UPI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f8f9fa;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }
        
        /* Main Content - Offset by sidebar width */
        .main-content {
            margin-left: 270px;
            min-height: 100vh;
            background: #f8f9fa;
        }
        
        /* Stats Card Hover */
        .stat-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
        }
        
        /* Table Hover */
        tbody tr:hover {
            background: #f8fafc;
        }
        
        /* Badge Styles */
        .badge {
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
        }
    </style>
</head>
<body>
    
    {{-- Include Sidebar --}}
    @include('admin.layouts.sidebar')

    {{-- MAIN CONTENT - Offset by 270px --}}
    <div class="main-content">
        
        {{-- Top Header Bar --}}
        <div style="background: white; border-bottom: 1px solid #e5e7eb; padding: 16px 32px;">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h1 style="font-size: 20px; font-weight: 700; color: #111827;">Dashboard</h1>
                <div style="display: flex; align-items: center; gap: 16px;">
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <img src="{{ asset('build/assets/image/Logo Suar Sangga.png') }}" alt="Admin" style="width: 32px; height: 32px; border-radius: 50%; object-fit: cover;">
                        <span style="font-size: 14px; font-weight: 500; color: #374151;">Hi, Admin</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Content Area --}}
        <div style="padding: 32px;">
            
            {{-- Welcome Section --}}
            <div style="margin-bottom: 32px;">
                <h2 style="font-size: 28px; font-weight: 700; color: #111827; margin-bottom: 8px;">Selamat Datang, Admin!</h2>
                <p style="font-size: 15px; color: #6b7280;">Kelola konten dan pantau performa website BEM REMA UPI</p>
            </div>

            {{-- Action Buttons ROW --}}
            <div style="display: flex; gap: 16px; margin-bottom: 32px; flex-wrap: wrap;">
                <a href="{{ route('admin.berita.create') }}" style="display: flex; align-items: center; gap: 8px; padding: 12px 24px; background: #dc2626; color: white; border-radius: 10px; font-weight: 600; font-size: 14px; border: none; cursor: pointer; box-shadow: 0 2px 8px rgba(220, 38, 38, 0.2); text-decoration: none;">
                    <svg style="width: 20px; height: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Tulis Berita Baru
                </a>
                
                <a href="{{ route('admin.anggota') }}" style="display: flex; align-items: center; gap: 8px; padding: 12px 24px; background: white; color: #2563eb; border: 2px solid #2563eb; border-radius: 10px; font-weight: 600; font-size: 14px; cursor: pointer; text-decoration: none;">
                    <svg style="width: 20px; height: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    Kelola Anggota Kabinet
                </a>
                
                <a href="{{ url('/') }}" target="_blank" style="display: flex; align-items: center; gap: 8px; padding: 12px 24px; background: white; color: #374151; border: 2px solid #374151; border-radius: 10px; font-weight: 600; font-size: 14px; cursor: pointer; text-decoration: none;">
                    <svg style="width: 20px; height: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    Lihat Tampilan Publik
                </a>
            </div>

            {{-- Stats Cards ROW --}}
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-bottom: 32px;">
                
                {{-- Card 1: Total Pengunjung --}}
                <div class="stat-card" style="background: white; border-radius: 16px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                        <div>
                            <p style="font-size: 14px; color: #6b7280; margin-bottom: 4px;">Total Pengunjung</p>
                            <p style="font-size: 12px; color: #9ca3af;">30 Hari Terakhir</p>
                        </div>
                        <div style="width: 40px; height: 40px; background: #fee2e2; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 24px; height: 24px; color: #ef4444;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 style="font-size: 32px; font-weight: 700; color: #111827; margin-bottom: 8px;">11,342</h3>
                    <p style="font-size: 13px; color: #10b981; font-weight: 600;">↑ 12.5% vs bulan lalu</p>
                </div>

                {{-- Card 2: Total Berita --}}
                <div class="stat-card" style="background: white; border-radius: 16px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                        <div>
                            <p style="font-size: 14px; color: #6b7280; margin-bottom: 4px;">Total Berita Terbit</p>
                            <p style="font-size: 12px; color: #9ca3af;">Artikel Dipublikasikan</p>
                        </div>
                        <div style="width: 40px; height: 40px; background: #fef3c7; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 24px; height: 24px; color: #f59e0b;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 style="font-size: 32px; font-weight: 700; color: #111827; margin-bottom: 8px;">48</h3>
                    <p style="font-size: 13px; color: #6b7280;">Bulan ini: <span style="font-weight: 600;">8 artikel</span></p>
                </div>

                {{-- Card 3: Anggota --}}
                <div class="stat-card" style="background: white; border-radius: 16px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                        <div>
                            <p style="font-size: 14px; color: #6b7280; margin-bottom: 4px;">Anggota Kabinet</p>
                            <p style="font-size: 12px; color: #9ca3af;">Profil Lengkap</p>
                        </div>
                        <div style="width: 40px; height: 40px; background: #dbeafe; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <svg style="width: 24px; height: 24px; color: #3b82f6;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 style="font-size: 32px; font-weight: 700; color: #111827; margin-bottom: 8px;">120</h3>
                    <p style="font-size: 13px; color: #6b7280;">Update terakhir: <span style="font-weight: 600;">2 hari lalu</span></p>
                </div>
            </div>

            {{-- Chart Section --}}
            <div style="background: white; border-radius: 16px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); margin-bottom: 32px;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
                    <h3 style="font-size: 18px; font-weight: 700; color: #111827;">Statistik Pengunjung Website</h3>
                    <div style="display: flex; gap: 8px;">
                        <button style="padding: 8px 16px; background: #3b5998; color: white; font-size: 13px; font-weight: 600; border-radius: 8px; border: none; cursor: pointer;">Monthly</button>
                        <button style="padding: 8px 16px; background: #f3f4f6; color: #6b7280; font-size: 13px; font-weight: 600; border-radius: 8px; border: none; cursor: pointer;">Weekly</button>
                    </div>
                </div>
                <div style="position: relative; height: 280px;">
                    <canvas id="visitorChart"></canvas>
                </div>
                <div style="text-align: right; margin-top: 16px;">
                    <button style="padding: 10px 20px; background: #10b981; color: white; font-size: 13px; font-weight: 600; border-radius: 8px; border: none; cursor: pointer;">Export</button>
                </div>
            </div>

            {{-- Berita Terbaru Table --}}
            <div style="background: white; border-radius: 16px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
                    <div>
                        <h3 style="font-size: 18px; font-weight: 700; color: #111827; margin-bottom: 4px;">Berita Terbaru Diterbitkan</h3>
                        <p style="font-size: 14px; color: #6b7280;">10 artikel terakhir yang telah dipublikasikan</p>
                    </div>
                    <a href="{{ route('admin.berita.index') }}" style="padding: 10px 20px; background: white; border: 2px solid #dc2626; color: #dc2626; font-size: 13px; font-weight: 600; border-radius: 8px; cursor: pointer; text-decoration: none; display: inline-block;">
                        Lihat Semua Berita
                    </a>
                </div>
                
                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr style="border-bottom: 2px solid #e5e7eb;">
                                <th style="text-align: left; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280;">Judul Berita</th>
                                <th style="text-align: left; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280;">Kategori</th>
                                <th style="text-align: left; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280;">Tanggal Terbit</th>
                                <th style="text-align: center; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 16px; font-size: 14px; color: #111827;">Presiden Resmikan Proyek Infrastruktur Nasional</td>
                                <td style="padding: 16px;">
                                    <span class="badge" style="background: #dbeafe; color: #1e40af;">Infrastruktur</span>
                                </td>
                                <td style="padding: 16px; font-size: 14px; color: #6b7280;">13 Nov 2025</td>
                                <td style="padding: 16px;">
                                    <div style="display: flex; justify-content: center; gap: 8px;">
                                        <button style="padding: 8px; background: transparent; border: none; color: #2563eb; cursor: pointer; border-radius: 6px;">
                                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                            </svg>
                                        </button>
                                        <button style="padding: 8px; background: transparent; border: none; color: #dc2626; cursor: pointer; border-radius: 6px;">
                                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 16px; font-size: 14px; color: #111827;">Menteri BUMN Tinjau Kinerja Perusahaan Negara</td>
                                <td style="padding: 16px;">
                                    <span class="badge" style="background: #d1fae5; color: #065f46;">Ekonomi</span>
                                </td>
                                <td style="padding: 16px; font-size: 14px; color: #6b7280;">12 Nov 2025</td>
                                <td style="padding: 16px;">
                                    <div style="display: flex; justify-content: center; gap: 8px;">
                                        <button style="padding: 8px; background: transparent; border: none; color: #2563eb; cursor: pointer; border-radius: 6px;">
                                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                            </svg>
                                        </button>
                                        <button style="padding: 8px; background: transparent; border: none; color: #dc2626; cursor: pointer; border-radius: 6px;">
                                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 16px; font-size: 14px; color: #111827;">Peluncuran Program Beasiswa untuk Mahasiswa Berprestasi</td>
                                <td style="padding: 16px;">
                                    <span class="badge" style="background: #e9d5ff; color: #6b21a8;">Pendidikan</span>
                                </td>
                                <td style="padding: 16px; font-size: 14px; color: #6b7280;">11 Nov 2025</td>
                                <td style="padding: 16px;">
                                    <div style="display: flex; justify-content: center; gap: 8px;">
                                        <button style="padding: 8px; background: transparent; border: none; color: #2563eb; cursor: pointer; border-radius: 6px;">
                                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                            </svg>
                                        </button>
                                        <button style="padding: 8px; background: transparent; border: none; color: #dc2626; cursor: pointer; border-radius: 6px;">
                                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 16px; font-size: 14px; color: #111827;">Kementerian Kesehatan Luncurkan Aplikasi Telemedicine</td>
                                <td style="padding: 16px;">
                                    <span class="badge" style="background: #fee2e2; color: #991b1b;">Kesehatan</span>
                                </td>
                                <td style="padding: 16px; font-size: 14px; color: #6b7280;">10 Nov 2025</td>
                                <td style="padding: 16px;">
                                    <div style="display: flex; justify-content: center; gap: 8px;">
                                        <button style="padding: 8px; background: transparent; border: none; color: #2563eb; cursor: pointer; border-radius: 6px;">
                                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                            </svg>
                                        </button>
                                        <button style="padding: 8px; background: transparent; border: none; color: #dc2626; cursor: pointer; border-radius: 6px;">
                                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 16px; font-size: 14px; color: #111827;">Pertemuan Bilateral dengan Delegasi Internasional</td>
                                <td style="padding: 16px;">
                                    <span class="badge" style="background: #fef3c7; color: #92400e;">Luar Negeri</span>
                                </td>
                                <td style="padding: 16px; font-size: 14px; color: #6b7280;">9 Nov 2025</td>
                                <td style="padding: 16px;">
                                    <div style="display: flex; justify-content: center; gap: 8px;">
                                        <button style="padding: 8px; background: transparent; border: none; color: #2563eb; cursor: pointer; border-radius: 6px;">
                                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                            </svg>
                                        </button>
                                        <button style="padding: 8px; background: transparent; border: none; color: #dc2626; cursor: pointer; border-radius: 6px;">
                                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>
    </div>

    {{-- Chart.js Script --}}
    <script>
        const ctx = document.getElementById('visitorChart');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Pengunjung',
                    data: [8500, 9200, 8900, 11500, 12200, 10800, 11900, 13500, 12800, 14200, 11000, 9500],
                    backgroundColor: '#3b5998',
                    borderRadius: 6,
                    barThickness: 40
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return value >= 1000 ? (value/1000) + 'k' : value;
                            }
                        },
                        grid: {
                            display: true,
                            color: '#f3f4f6'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    </script>

</body>
</html>
