<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

trait LogsActivity
{
    /**
     * Boot the trait
     */
    protected static function bootLogsActivity()
    {
        static::created(function ($model) {
            self::logActivity('created', $model);
        });

        static::updated(function ($model) {
            self::logActivity('updated', $model);
        });

        static::deleted(function ($model) {
            self::logActivity('deleted', $model);
        });
    }

    /**
     * Log the activity
     */
    protected static function logActivity(string $action, $model)
    {
        // Only log if user is authenticated
        if (!session()->has('admin_logged_in') || !session()->has('admin_id')) {
            return;
        }

        try {
            DB::table('activity_logs')->insert([
                'user_id' => session('admin_id'),
                'action' => $action,
                'model' => get_class($model),
                'model_id' => $model->id ?? null,
                'description' => self::getActivityDescription($action, $model),
                'properties' => json_encode($model->getAttributes()),
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } catch (\Exception $e) {
            // Silently fail if activity_logs table doesn't exist yet
            Log::debug('Failed to log activity: ' . $e->getMessage());
        }
    }

    /**
     * Get activity description
     */
    protected static function getActivityDescription(string $action, $model): string
    {
        $modelName = class_basename($model);
        $title = $model->judul ?? $model->name ?? $model->id ?? 'Unknown';

        return match ($action) {
            'created' => "Membuat {$modelName}: {$title}",
            'updated' => "Mengupdate {$modelName}: {$title}",
            'deleted' => "Menghapus {$modelName}: {$title}",
            default => "Action {$action} pada {$modelName}"
        };
    }
}
