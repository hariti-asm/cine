<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Schema;
use App\Models\Seat;

class SchemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

     public function show(string $id)
     { $ns=Seat::count();
         $schema = Schema::findOrFail($id);
        //  dd($schema->id);
         $seatsPerRow = $schema->seats_per_row;
         $seats = Seat::where('schema_id', $schema->id)->get();
        //  var_dump($seats);
         return view('schemas.show', compact('schema', 'seats', 'seatsPerRow'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
