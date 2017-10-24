<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return response()->json(['data' => Store::with('vegetables')->get()]);
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
        $store = Store::find($id);

        $store->store_name = $request->store_name;
        $store->store_desc = $request->store_desc;

        $store->save();

        $store->vegetables;

        return response()->json(['store' => $store]);
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

        $store = Store::find($id);

        $store->delete();

        return response()->json(['message' => "Vegetable deleted successfuly."]);
    }

    public function getOrdersByStore($id){
        $users = [];
        $orders = Store::find($id)->orders;
        foreach($orders as $order){
            $order->items;
            foreach($order->items as $item){
                $item->vegetable;
            }
            $users[] = $order->user;
        }
        return ['orders'=> $orders];
    }

    public function setLocation($id, Request $request){
        $store = Store::find($id);

        $store->latitude = $request->latitude;

        $store->longitude = $request->longitude;

        $store->save();

        $store->vegetables;

        return response()->json(['store' => $store]);
    }
}
