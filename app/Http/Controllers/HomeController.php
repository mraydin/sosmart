<?php

namespace App\Http\Controllers;

use App\Count;
use App\Devices;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function get_Admin(Request $request)

    {
        $upcnt = Count::select('deventries.*')->where('direction', '=', 'up')->count();
        $downcnt = Count::select('deventries.*')->where('direction', '=', 'down')->count();
        $items = Devices::select('devices.*')->get();
        return view('backend.pages.home',compact('upcnt','downcnt', 'items' ))
            ->with('i', ($request->input('page', 1) - 1) * 5);



    }

    public function realtime() {

        $upcnt = Count::select('deventries.*')->where('direction', '=', 'up')->count();
        $downcnt = Count::select('deventries.*')->where('direction', '=', 'down')->count();
        $items = Devices::select('devices.*')->get();
        $total= $upcnt - $downcnt;

        return compact('upcnt','downcnt','total');

    }

    public function get_file() {

        return view('backend.pages.file');
    }
}
