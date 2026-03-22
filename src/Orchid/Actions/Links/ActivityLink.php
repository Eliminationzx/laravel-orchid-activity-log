<?php

declare(strict_types=1);

namespace OrchidActivityLog\Orchid\Actions\Links;

use OrchidActivityLog\Services\ActivityService;
use Orchid\Screen\Actions\Link;

class ActivityLink
{
    public static function make() : Link
    {
        return Link::make(ActivityService::NAME)
            ->icon(ActivityService::ICON);
    }
}
