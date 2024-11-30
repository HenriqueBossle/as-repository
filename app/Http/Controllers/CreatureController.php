<?php

namespace App\Http\Controllers;

use App\Models\Creature;
use Illuminate\Http\Request;

class CreatureController extends Controller
{
    public function index()
    {
        $creatures = Creature::all();
        return view('creatures.index', compact('creatures'));
    }

        public function create()
        {
            return view('creatures.create');
            //$coaches = Coach::all();
            //return view('pokemon.create', compact('coaches'));
        }

        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'species' => 'required',
                'age' => 'required',
                'habitat' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            ]);
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);

            $creature = new Creature();
            $creature->name = $request->name;
            $creature->species = $request->species;
            $creature->age = $request->age;
            $creature->habitat = $request->habitat;
            $creature->image = 'images/'.$imageName;
            $creature->save();

            return redirect('creatures')->with('success', 'Creature created successfully.');
        }

        public function edit($id)
        {
            $creature = Creature::findOrFail($id);
            return view('creatures.edit', compact('creature'));
        }

        public function update(Request $request, $id)
        {
            $creature = Creature::findOrFail($id);
            $creature->update($request->all());
            $creature->name = $request->name;
            $creature->species = $request->species;
            $creature->age = $request->age;
            $creature->habitat = $request->habitat;

            if(!is_null($request->image)) {
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $creature->image = 'images/'.$imageName;
            }
            $creature->save();

            return redirect('creatures')->with('success', 'Craeture updated successfully.');
        }

        public function destroy($id)
        {
            $creature = Creature::findOrFail($id);
            $creature->delete();
            return redirect('creatures')->with('success', 'Creature deleted successfully.');
        }
    }

