<?php

use App\Helpers\DateHelper;

if (!function_exists('formatTanggalIndo')) {
    /**
     * Format tanggal ke format Indonesia
     */
    function formatTanggalIndo($date, $format = 'd F Y')
    {
        return DateHelper::formatTanggalIndo($date, $format);
    }
}

if (!function_exists('formatTanggalWaktu')) {
    /**
     * Format tanggal dengan waktu
     */
    function formatTanggalWaktu($date)
    {
        return DateHelper::formatTanggalWaktu($date);
    }
}

if (!function_exists('formatTanggalSingkat')) {
    /**
     * Format tanggal singkat
     */
    function formatTanggalSingkat($date)
    {
        return DateHelper::formatTanggalSingkat($date);
    }
}

if (!function_exists('diffForHumans')) {
    /**
     * Human readable time difference
     */
    function diffForHumans($date)
    {
        return DateHelper::diffForHumans($date);
    }
}

if (!function_exists('limitText')) {
    /**
     * Limit text dengan excerpt
     */
    function limitText($text, $limit = 120)
    {
        return \Illuminate\Support\Str::limit(strip_tags($text), $limit, '...');
    }
}

if (!function_exists('formatViews')) {
    /**
     * Format views number (1234 -> 1.2K)
     */
    function formatViews($views)
    {
        if ($views >= 1000000) {
            return number_format($views / 1000000, 1) . 'M';
        } elseif ($views >= 1000) {
            return number_format($views / 1000, 1) . 'K';
        }
        
        return number_format($views);
    }
}

if (!function_exists('nl2p')) {
    /**
     * Convert newlines to paragraphs
     */
    function nl2p($text)
    {
        // Remove existing <p> tags first
        $text = strip_tags($text, '<strong><em><u><a><br><h1><h2><h3><h4><h5><ul><ol><li><blockquote><code><pre>');
        
        // Split by double newlines (paragraphs)
        $paragraphs = preg_split('/\n\s*\n/', trim($text), -1, PREG_SPLIT_NO_EMPTY);
        
        $output = '';
        foreach ($paragraphs as $paragraph) {
            $paragraph = trim($paragraph);
            
            // Don't wrap headings, lists, or blockquotes
            if (preg_match('/^<(h[1-6]|ul|ol|blockquote|pre)/i', $paragraph)) {
                $output .= $paragraph . "\n\n";
            } else {
                // Convert single newlines to <br>
                $paragraph = nl2br($paragraph);
                $output .= '<p>' . $paragraph . '</p>' . "\n";
            }
        }
        
        return $output;
    }
}

if (!function_exists('parseMarkdownToHtml')) {
    /**
     * Parse markdown content to clean HTML
     */
    function parseMarkdownToHtml($content)
    {
        if (empty($content)) {
            return '';
        }

        // Initialize CommonMark converter
        $converter = new \League\CommonMark\CommonMarkConverter([
            'html_input' => 'allow',
            'allow_unsafe_links' => false,
        ]);
        
        // Convert markdown to HTML
        $html = $converter->convert($content)->getContent();
        
        // Clean up and sanitize
        $allowedTags = '<p><br><strong><em><u><h1><h2><h3><h4><h5><h6><ul><ol><li><a><img><blockquote><code><pre><hr><table><thead><tbody><tr><th><td>';
        $html = strip_tags($html, $allowedTags);
        
        return $html;
    }
}
