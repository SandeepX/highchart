<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HighChartController extends Controller
{
    public function handleChart()
    {
//                $userData =   DB::select(
//                'SELECT
//                            EXTRACT(MONTH FROM created_at) AS month, COUNT(*) AS count
//                       FROM
//                            users
//                       WHERE
//                            YEAR(created_at) = YEAR(CURDATE())
//                       GROUP BY (EXTRACT(MONTH FROM created_at))
//                       ORDER BY month ASC;'
//    );
//
        $userData = User::select(
            \DB::raw("COUNT(*) as count"),
            \DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->pluck('count','month');



        return view('welcome', compact('userData'));
    }
}
