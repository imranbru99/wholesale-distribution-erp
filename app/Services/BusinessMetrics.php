<?php

namespace App\Services;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\WorkOrder;

class BusinessMetrics
{
    public function overview(): array
    {
        return [
            'customers' => Customer::query()->count(),
            'products' => Product::query()->count(),
            'invoices' => Invoice::query()->count(),
            'work_orders' => WorkOrder::query()->count(),
            'application' => config('app.name'),
            'author' => config('app.author'),
        ];
    }
}
