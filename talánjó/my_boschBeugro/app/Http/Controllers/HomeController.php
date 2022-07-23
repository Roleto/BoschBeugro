<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;

class HomeController extends Controller
{
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
                'productions' => Production::all(),
                'filter_data' => 0
        ]);
    }

    public function destroy($id)
    {
        $production = Production::findorFail($id);
        $production -> delete();

        return redirect()->route('production',[
            'productions' => Production::all(),
            'filter_data' => 0
        ]);
    }

    public function center()
    {
        return view('center');
    }
}
