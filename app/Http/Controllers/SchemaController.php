<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Schema;
use App\Models\Seat;
use App\Models\Hall;

class SchemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shema = Schema::all();

        return view('dashboard' , compact('shema'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'row' => 'required',
            'seats' => 'required',
            'sides' => 'required'
        ]);

        Schema::create([
            'name' => $request->name,
            'rows' => $request->row,
            'seats_per_row' => $request->seats,
            'sides' => $request->sides
        ]);

        return redirect()->back()->with('SuccessFully');
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
        $ns = Seat::count();

        $movie = Movie::findOrFail($id);
        // dd($movie);
        $hall = $movie->hall;

        if ($hall) {
            $schema = $hall->schema;
            $seatsPerRow = $schema->seats_per_row;
            $seats = Seat::where('hall_id', $schema->id)->get();

            return view('schemas.show', compact('movie', 'schema', 'seats', 'seatsPerRow'));
        } else {
            echo"something goes wrong";
    }
}







    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schema $id)
    {
        $request->validate([
            'nameofshema' => 'required',
            'rownum' => 'required',
            'seatsrow' => 'required',
            'sidesname' => 'required'
        ]);

        $id->update([
            'name' => $request->nameofshema,
            'rows' => $request->rownum,
            'seats_per_row' => $request->seatsrow,
            'sides' => $request->sidesname
        ]);

        return redirect()->back()->with('Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $schema = Schema::findOrFail($id);
        $schema->delete();

        return redirect()->back()->with('Deleted');
    }
}
