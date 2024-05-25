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
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $id= $notes->id;

        // Update the note with the new data
        //$notes->title = $request->input('title');
        //$notes->content = $request->input('content');
        //$notes->save();
        $notes->update([
            'title'=>$request->title,
            'content'=>$request->content,
        ]);
        // Return a response
       
        return response()->json(['success'=>true,'notes'=>$id]);

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(notes $notes)
    {
        //
    }
}
