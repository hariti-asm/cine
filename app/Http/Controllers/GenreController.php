<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(){
        $genres = Genre::all();

        return view('admin.genre' , compact('genres'));
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        Genre::create([
            'name' => $request->name
        ]);

        return redirect()->back()->with('Success');
    }

    public function destroy( $id){
        $genre = Genre::findOrFail($id);
        $genre->delete();

        return redirect()->back()->with('Deleted SuccessFully');
    }

    public function update(Genre $id , Request $request){
        $request->validate([
            'genrename' => 'required'
        ]);

        $id->update([
            'name' => $request->genrename
        ]);

        return redirect()->back()->with('Updated SuccessFully');
    }
}
