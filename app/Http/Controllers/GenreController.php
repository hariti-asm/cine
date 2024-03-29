<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
// use App\Models\Movie;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::take(4)->get();
        $topRatedMovies = Movie::orderByDesc('rating')->take(8)->get();
        $genres = Genre::All();
        $tvSeries = $genre->movies()->take(4)->get();
        var_dump($genres);
        return view("welcome", compact( 'genres'));
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
    {
        //
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
