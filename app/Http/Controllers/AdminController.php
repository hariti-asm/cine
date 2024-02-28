<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Genre;
use App\Models\Hall;
use App\Models\Movie;
use App\Models\Schema;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function alldata(){
        $moviecount = Movie::count();
        $shemacount = Schema::count();
        $Genrecount = Genre::count();
        $hallcount = Hall::count();


        $schemas = Schema::all();
        $genres = Genre::all();
        $movies = Movie::all();
        $halls = Hall::all();
        return view('dashboard' , compact('hallcount' , 'Genrecount' , 'shemacount' , 'moviecount' , 'schemas' , 'genres' , 'movies' , 'halls'));
    }


    public function schemadata(){
        $schemas = Schema::all();

        return view('admin.schema' , compact('schemas'));
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
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
