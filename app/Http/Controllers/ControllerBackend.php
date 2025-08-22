<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;
use App\Models\Demi;
use App\Models\Gros;
use App\Models\King;

class ControllerBackend extends Controller
{
    public function createDemi(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        // Logic to handle the creation of a Demi item
        $demi = new Demi();
        if ($request->hasFile('image')) {
            // Sauvegarder l'image
            $imagePath = $request->file('image')->store('demi', 'public');
            $demi->image = $imagePath;
        }
        $demi->name = $request->input('name');
        $demi->location = $request->input('location');
        $demi->description = $request->input('description');
        $demi->save();
        return redirect()->back()->with('success', 'Demi ajouté avec succès !');
    }

    public function createGros(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        // Logic to handle the creation of a Gros item
        $gros = new Gros();
        if ($request->hasFile('image')) {
        // Sauvegarder l'image
        $imagePath = $request->file('image')->store('gros', 'public');
        $gros->image = $imagePath;
        }
        $gros->name = $request->input('name');
        $gros->location = $request->input('location');
        $gros->description = $request->input('description');
        $gros->save();
        return redirect()->back()->with('success', 'Gros ajouté avec succès !');
    }

    public function createKing(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        // Logic to handle the creation of a King item
        $king = new King();
        $king->image = $request->file('image')->store('king', 'public');
        $king->name = $request->input('name');
        $king->location = $request->input('location');
        $king->description = $request->input('description');
        $king->save();
    }

    public function actualite(Request $request){
        return view('pages.actualite');
    }

    public function createActualite(Request $request){
        $request->validate([
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'=>'required|string|max:255',
            'localisation'=>'required|string|max:255',
            'description'=>'required|string|max:1000',
        ]);
        $actualite= new Actualite();
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('actualites', 'public');
            $actualite->image = $imagePath;
        }
        $actualite->name = $request->input('name');
        $actualite->localisation = $request->input('localisation');
        $actualite->description = $request->input('description');
        $actualite->save();
        return redirect()->back()->with('success', 'Actualité ajoutée avec succès !');
    }
}


