<?php

declare(strict_types=1);

namespace Orchid\ActivityLog\Orchid\Actions\Links;

use Orchid\ActivityLog\Services\ActivityService;
use Orchid\Screen\Actions\Link;

class ActivityLink
{
    public static function make() : Link
    {
        return Link::make(ActivityService::NAME)
            ->icon(ActivityService::ICON);
    }
}
