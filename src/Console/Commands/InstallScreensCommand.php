<?php

declare(strict_types=1);

namespace Orchid\ActivityLog\Console\Commands;

use Illuminate\Console\Command;
use Orchid\ActivityLog\Providers\FoundationServiceProvider;

class InstallScreensCommand extends Command
{
    protected $signature = 'orchid-activity-log:install-screens';

    protected $description = 'Install Orchid Activity Log Screens';

    public function handle() : int
    {
        $this->call('vendor:publish', [
            '--provider' => FoundationServiceProvider::class,
            '--tag'      => [
                'orchid-activity-log-screens',
            ],
        ]);

        $this->components->info('Package Screens installed!');

        return 1;
    }
}
