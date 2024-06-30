<?php

namespace App\Filament\Widgets;

use App\Models\Channel;
use App\Models\Video;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OverviewWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make("Video", Video::count())
                ->description("Jumlah video yang telah ditambahkan")
                ->icon("heroicon-o-video-camera"),
            Stat::make("Channel", Channel::count())
                ->description("Jumlah channel yang telah ditambahkan")
                ->icon("heroicon-o-tv")
        ];
    }
}
