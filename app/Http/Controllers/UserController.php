<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Store;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(['data' => User::orderBy('id', 'desc')->with('store')->get()]);
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
    public function store(UserRequest $request)
    {
        //
        $user = User::create($request->except('password') +
            ['password' => bcrypt($request->password)]
        );

        if($user->usertype_id == 1){
            $store = new Store;

            $store->store_name = $user->name."'s Store";
            
            $store->user_id = $user->id;

            $store->save();
        }
         
         return response()->json(['data' => $user, 'message'  => 'User successfully created.']);
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
        $user = User::find($id);

        if(!$user){
            return response()->json(['error' => 'Cannot find user']);
        }
        return response()->json(['data' =>$user::with('store')->find($id)]);
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
        $user = User::find($id);

        if(!$user){
            return response()->json(['error' => 'Cannot find user']);
        }

        $user->update($request->all());

        return response()->json(['data' => $user, 'message'  => 'User successfully updated.']);

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
        $user = User::find($id);
        if(!$user){
            return response()->json(['error' => 'Cannot find user']);
        }

        $user->delete();

        return response()->json(['message' => 'User successfully deleted']);
    }

    public function getStore($id){
        $store = User::find($id)->store;
        $store->vegetables;
        return $store;
    }
}
