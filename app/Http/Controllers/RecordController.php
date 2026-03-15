<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // test
        // $records = ['music1', 'music2', 'music3', 'music4', 'music5', 'music1', 'music2', 'music3', 'music4', 'music5'];
        $records = Record::latest()->get();
        return view('records.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('records.create');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Record $record)
    {   
        $record = Record::find($record->id);
        return view('records.edit', compact('record'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Record $record)
    {
        $request -> validate([
            'borrowerName' => 'required',
            'bookTitle' => 'required',
            'status' => 'required',
        ]);

        $record -> update($request->all());
        return redirect()->route('records.index')->with('success','Record updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Record $record)
    {
        $record -> delete();
        return redirect()->route('records.index', $record -> id)->with('success','Record removed');
    }
}
