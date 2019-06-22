<?php

namespace Modules\Orders\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Orders\Entities\orders as Order;
use DB;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {

        // $SUM = Order::where('status', 'Aktif')->get();
        // $count = $SUM->sum(harga));    

        $data = array(
        'order' => Order::all(),
      );

        return view('orders::index', $data) ;
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('orders::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $create = new Order;
        $create->nama   = $request->nama;
        $create->product = $request->product;
        $create->durasi = $request->durasi;
        $create->device_id = $request->device_id;
        $create->harga = $request->harga;
        $create->status = $request->status;
        $create->save();

        

        return redirect()->route('order.index');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('orders::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $order = Order::where('order_id', $id)->first();
      
        $data = array(
        'order' => $order
    );
        
        return view('orders::edit', $data);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $insert = Order::where('order_id', $id)->update([
        'nama'   => $request->nama,
        'product' => $request->product,
        'durasi' => $request->durasi,
        'device_id' => $request->device_id,
        'harga' => $request->harga,
        'status' => $request->status
      ]);

        return redirect()->route('order.index');

    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {

      $deleted = Order::where('order_id', $id);
      $deleted->delete();

      return redirect()->route('order.index')->with('succes', 'Orderan Berhasil Dihapus!');
       
    }

    public function loaddata()
    {
        $data = Order::orderBy('order_id','desc')->get();

        $no = 1;

        return view('orders::loaddata', compact('data','no'));

    }
}
