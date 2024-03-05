<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller
{
    public function index()
    {
        $halls = Hall::join('schemas', 'halls.schema_id', '=', 'schemas.id')->get();
        return view('admin.hall', compact('halls'));
    }


    public function create(Request $request)
        {
            $request->validate([
                'schema_id' => 'required',
                'name' => 'required',
                'capacity' => 'required'
            ]);

            Hall::create([
                'schema_id' => $request->schema_id,
                'name' => $request->name,
                'capacity' => $request->capacity
            ]);

            return redirect()->back();
        }

        public function update(Request $request , Hall $id){
            $request->validate([
                'schemaid' => 'required',
                'namehall' => 'required',
                'hallcapacity' => 'required'
            ]);

            $id->update([
                'schema_id' => $request->schemaid,
                'name' => $request->namehall,
                'capacity' => $request->hallcapacity
            ]);

            return redirect()->back();
        }

        public function destroy($id){
            $hall = Hall::findOrFail($id);
            $hall->delete();

            return redirect()->back();
        }
}
