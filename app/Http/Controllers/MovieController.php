<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;

class MovieController extends Controller
{
    /**
     * Display the specified resource.
     */



       public function index()
    {
        $movies = Movie::take(4)->get();
        $topRatedMovies = Movie::orderByDesc('rating')->take(8)->get();
        $genre = Genre::findOrFail(4);
        $genres = Genre::all();
        $tvSeries = $genre->movies()->take(4)->get();
        return view("welcome", compact('movies', 'topRatedMovies', 'tvSeries','genres'));
    }

    public function filtreParGenre(Genre $genre)
    {
        $genres = Genre::all();
        $movies = Movie::take(4)->get();
        $topRatedMovies = Movie::orderByDesc('rating')->take(8)->get();
        $genres = Genre::all();
        $tvSeries = $genre->movies()->take(4)->get();
        $movies = $genre->movies()->get();
        return view("welcome", compact('movies', 'genres','topRatedMovies', 'tvSeries'));
    }

    public function search()
    {
        $query = Movie::query();
        $topRatedMovies = Movie::orderByDesc('rating')->take(8)->get();
        $genre = Genre::findOrFail(4);
        $genres = Genre::all();
        $tvSeries = $genre->movies()->take(4)->get();
        if ($search = request('search')) {
            $query->where('name', 'like', '%'. $search . '%');
        }
        $movies = $query->get();
        return view("welcome", compact('movies','topRatedMovies', 'tvSeries','genres'));
    }

    /**
     * Show the form for editing the specified resource.
     */
     public function show(string $slug)
     {
         $movie = Movie::where('slug', $slug)->firstOrFail();
         $genre = Genre::findOrFail(4);
         $tvSeries = $genre->movies()->take(4)->get();
         return view('movie.show', compact('movie', 'tvSeries'));
     }

     public function showdata()
     {
         $movies = Movie::all();

         return view('admin.movie' , compact('movies'));
     }
     public function create(Request $request){
         $request->validate([

             'name' => 'required',
             'description' => 'required',
             'actors' => 'required',
             'producer' => 'required',
             'start_time' => 'required',
         ]);

         Movie::create([
             'genre_id' => null,
             'hall_id' => null,
             'name' => $request->name,
             'description' => $request->description,
             'actors' => $request->actors,
             'producer' => $request->producer,
             'running_time' => null,
             'playing_date' => null,
             'start_time' => $request->start_time,
             'end_time' => null,
             'image' => null,
             'publication_date' => null,
             'rating' => null,
             'quality' => null,
             'slug' => null
         ]);

         return redirect()->back();
     }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'actors' => 'required',
            'producer' => 'required',
            'start_time' => 'required',
        ]);

        $id->upddate([

                'genre_id' => null,
                'hall_id' => null,
                'name' => $request->name,
                'description' => $request->description,
                'actors' => $request->actors,
                'producer' => $request->producer,
                'running_time' => null,
                'playing_date' => null,
                'start_time' => $request->start_time,
                'end_time' => null,
                'image' => null,
                'publication_date' => null,
                'rating' => null,
                'quality' => null,
                'slug' => null
        ]);

        return redirect()->back()->with('Success');
    }


    public function destroy(string $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return redirect()->back();
    }
}
