<?php

namespace App\Console;

use App\Console\Commands\C2cMatchingCommand;
use App\Console\Commands\C2cMatchOrdersCommand;
use App\Http\Services\Orders\C2cMatchingService;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        C2cMatchOrdersCommand::class,  // 注册自定义命令
        C2cMatchingCommand::class,  // 注册自定义命令
    ];
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            (new C2cMatchingService())->startMatching();
        })->everyThirtySeconds();  // 30秒
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
