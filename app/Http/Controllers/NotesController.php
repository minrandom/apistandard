<?php

namespace App\Http\Controllers;

use App\Models\notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Notes = notes::all();

        return response()->json(['success'=>true,'notes' => $Notes]);
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
       
    $create= Notes::create($request->all());
        return response()->json(['success'=>true,'notes' => $create]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
            //
        
        $notes = notes::where('id',$id)->first();

        return response()->json(['success'=>true,'notes'=>$notes]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(notes $notes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, notes $notes)
    {
        //
        return response()->json(['success'=>true,'notes'=>$notes,'data'=>$request]);

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(notes $notes)
    {
        //
    }
}
