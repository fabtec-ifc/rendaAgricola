<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Log;

class DeleteOldLoginLogs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'logs:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete login logs older than 60 days';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $date = now()->subDays(60);

        $deleted = Log::where('data', '<', $date)->delete();

        $this->info("Deleted $deleted old login logs.");

        return 0;
    }
}
