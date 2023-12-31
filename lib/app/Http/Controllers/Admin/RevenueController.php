<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VpOrder;
use Illuminate\Http\Request;

class RevenueController extends Controller
{
    public function getRevenue()
    {
        $revenue = VpOrder::where('order_status', '=', 'Hoàn thành')->sum('total_price');

        return view('backend.revenue', compact('revenue'));
    }
}
