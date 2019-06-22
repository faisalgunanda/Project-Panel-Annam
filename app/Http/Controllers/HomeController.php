<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Orders\Entities\orders as Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data   = Order::where('status','clear')->select('harga')->get();
        $SUM    = $data->sum('harga');
        $rupiah = "Rp. " . number_format($SUM,0,',','.');

        $data = array(
            'aktif'     => Order::where('status','Aktif')->count(),
            'nonaktif'  => Order::where('status','Non Aktif')->count(),
            'clear'     => Order::where('status', 'Clear')->count(),
            'sum'       => $rupiah
        );


        return view('home',$data);
    }
}
