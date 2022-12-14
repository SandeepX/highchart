<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HighChartController extends Controller
{
    public function handleChart()
    {
        $userData = User::select(
            \DB::raw("COUNT(*) as count"),
            \DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->pluck('count','month');

        return view('welcome', compact('userData'));
    }
}
