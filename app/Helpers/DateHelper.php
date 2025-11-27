<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateHelper
{
    /**
     * Format tanggal ke format Indonesia
     * 
     * @param string|Carbon $date
     * @param string $format (default: 'd F Y')
     * @return string
     */
    public static function formatTanggalIndo($date, $format = 'd F Y')
    {
        if (!$date) {
            return '';
        }

        Carbon::setLocale('id');
        
        if (is_string($date)) {
            $date = Carbon::parse($date);
        }

        return $date->translatedFormat($format);
    }

    /**
     * Format tanggal dengan waktu
     * 
     * @param string|Carbon $date
     * @return string
     */
    public static function formatTanggalWaktu($date)
    {
        return self::formatTanggalIndo($date, 'd F Y, H:i');
    }

    /**
     * Format tanggal singkat (01 Nov 2025)
     * 
     * @param string|Carbon $date
     * @return string
     */
    public static function formatTanggalSingkat($date)
    {
        return self::formatTanggalIndo($date, 'd M Y');
    }

    /**
     * Get human readable time difference (1 jam yang lalu, 2 hari yang lalu)
     * 
     * @param string|Carbon $date
     * @return string
     */
    public static function diffForHumans($date)
    {
        Carbon::setLocale('id');
        
        if (is_string($date)) {
            $date = Carbon::parse($date);
        }

        return $date->diffForHumans();
    }
}
