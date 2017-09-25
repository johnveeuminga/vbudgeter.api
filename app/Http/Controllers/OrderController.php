<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(['data' => Order::orderBy('id', 'desc')->with('user', 'store')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // return($request->all());
        $order = new Order;

        $order->store_id = $request->store['id'];
        $order->user_id = $request->user['id'];
        $order->budget = $request->budget;
        $order->total = $request->total;

        $order->save();
        foreach ($request->items as $key => $item) {
            if(!is_null($item)){
                $orderItem = new OrderItem;

                $orderItem->order_id = $order->id;
                $orderItem->vegetables_id = $item['id'];
                $orderItem->price = $request->itemsPrice[$key];
                $orderItem->price_index = $request->priceIndex[$key];

                $orderItem->save();
            }

        }

        return response()->json(['data' => $order->with('items')->get()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $order = Order::find($id);
        foreach($order->items as $item){
            $item->delete();
        }

        $order->delete();

         return response()->json(['message' => 'Item deleted']);
    }

}
