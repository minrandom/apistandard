<?php

namespace App\Http\Controllers;

use App\Models\userlogin;
use Illuminate\Http\Request;

class UserloginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $logindata= userlogin::all();

    }

    public function belajarlogin(Request $request){
        
        $masuk = userlogin::where("username",$request->username)->where('password',$request->password)->first();
        return response()->json(['success'=>true,'result' => $masuk]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(userlogin $userlogin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(userlogin $userlogin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, userlogin $userlogin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(userlogin $userlogin)
    {
        //
    }
}
