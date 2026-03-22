<?php

declare(strict_types=1);

namespace Orchid\ActivityLog\Providers;

use App\Models\Activity;
use Manzadey\LaravelOrchidHelpers\Services\PlatformPermissionService;
use Orchid\Platform\OrchidServiceProvider;

class PlatformServiceProvider extends OrchidServiceProvider
{
    public function registerPermissions() : array
    {
        $permissionService = PlatformPermissionService::make();

        return collect([Activity::class])
            ->map(static fn(string $model) => $permissionService->getPlatformProviderPermissions($model))
            ->toArray();
    }
}
