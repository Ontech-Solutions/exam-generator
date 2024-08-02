<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class RandomizationDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.randomization-dashboard';

    protected static ?string $title = 'Dashboard';

    protected static ?int $navigationSort = 1;

    public static function getNavigationLabel(): string
    {
        return "Dashboard";
    }

    public function getSubheading(): string
    {
        return "Examination Paper | Randomization | Auto-Generation";
    }
}
