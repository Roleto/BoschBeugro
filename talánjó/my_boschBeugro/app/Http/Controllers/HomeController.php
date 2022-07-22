<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;

class HomeController extends Controller
{
    private static function getData(){
        // return [
        //     ['id' => 1, 'pcb_id' =>10,'quantity' =>100,'startDate' =>'2020-01-05 10:00:05','endDate' =>'2020-01-05 10:05:45'].
        //     ['id' => 2, 'pcb_id' =>20,'quantity' =>50,'startDate' =>'2020-01-05 10:10:05','endDate' =>'2020-01-05 10:15:45'].
        //     ['id' => 3, 'pcb_id' =>30,'quantity' =>354,'startDate' =>'2020-01-05 10:16:05','endDate' =>'2020-01-05 10:25:45'].
        //     ['id' => 4, 'pcb_id' =>40,'quantity' =>78,'startDate' =>'2020-01-05 10:30:05','endDate' =>'2020-01-05 10:35:45'].
        //     ['id' => 5, 'pcb_id' =>50,'quantity' =>22,'startDate' =>'2020-01-05 10:38:05','endDate' =>'2020-01-05 10:40:45'],
        // ];
        return [
            ['id' => 1, 'name' => 'American Standard Strat', 'brand' => 'Fender'],
            ['id' => 2, 'name' => 'Starla S2', 'brand' => 'PRS'],
            ['id' => 3, 'name' => 'Explorer', 'brand' => 'Gibson'],
            ['id' => 4, 'name' => 'Talman', 'brand' => 'Ibanez'],
        ];
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function production()
    {
        //views can be returned with data.
        return view('production', [
                'productions' => Production::all()
        ]);
    }
}
