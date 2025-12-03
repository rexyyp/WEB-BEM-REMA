<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class ClearSitemapCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear the sitemap cache to regenerate sitemap.xml';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Cache::forget('sitemap_xml');

        $this->info('Sitemap cache cleared successfully!');
        $this->comment('The sitemap will be regenerated on the next visit to /sitemap.xml');

        return Command::SUCCESS;
    }
}
