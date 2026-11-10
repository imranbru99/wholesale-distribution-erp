<?php

namespace App\Filament\Widgets;

use App\Services\BusinessMetrics;
use App\Services\ModuleRegistry;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BusinessPulse extends BaseWidget
{
    protected function getStats(): array
    {
        $metrics = app(BusinessMetrics::class)->overview();
        $enabled = collect(app(ModuleRegistry::class)->all())->where('enabled', true)->count();

        return [
            Stat::make('Enabled modules', (string) $enabled)->description('Wholesale Distribution ERP')->color('success'),
            Stat::make('Customers', (string) $metrics['customers'])->description('CRM records')->color('info'),
            Stat::make('Products', (string) $metrics['products'])->description('Catalog SKUs')->color('warning'),
            Stat::make('Invoices', (string) $metrics['invoices'])->description('Sales documents')->color('primary'),
        ];
    }
}
