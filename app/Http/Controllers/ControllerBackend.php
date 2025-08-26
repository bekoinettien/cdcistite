<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;
use App\Models\Demi;
use App\Models\Gros;
use App\Models\King;
use App\Models\Accueilcorrousel;
use App\Models\Promotion;

class ControllerBackend extends Controller
{
    //Debut de la Gestion de demi gros
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
    public function updateDemi(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $demi = Demi::find($id);
        if (!$demi) {
            return redirect()->back()->with('error', 'Demi non trouvé.');
        }

        if ($request->hasFile('image')) {
            // Sauvegarder la nouvelle image
            $imagePath = $request->file('image')->store('demi', 'public');
            $demi->image = $imagePath;
        }
        $demi->name = $request->input('name');
        $demi->location = $request->input('location');
        $demi->description = $request->input('description');
        $demi->update();

        return redirect()->route('listeadmindemi')->with('success', 'Demi mis à jour avec succès !');
    }
    //Fin de la Gestion de demi gros


    // debut de la Gestion de gros

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

    public function updateGros(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $gros = Gros::find($id);
        if (!$gros) {
            return redirect()->back()->with('error', 'Gros non trouvé.');
        }

        if ($request->hasFile('image')) {
            // Sauvegarder la nouvelle image
            $imagePath = $request->file('image')->store('gros', 'public');
            $gros->image = $imagePath;
        }
        $gros->name = $request->input('name');
        $gros->location = $request->input('location');
        $gros->description = $request->input('description');
        $gros->update();

        return redirect()->route('listeadmingros')->with('success', 'Gros mis à jour avec succès !');
    }
    //Fin de la Gestion de gros



    // debut de la gestion des kings
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
        return redirect()->back()->with('success', 'King ajouté avec succès !');
    }
    public function updateKing(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $king = King::find($id);
        if (!$king) {
            return redirect()->back()->with('error', 'King non trouvé.');
        }

        if ($request->hasFile('image')) {
            // Sauvegarder la nouvelle image
            $imagePath = $request->file('image')->store('king', 'public');
            $king->image = $imagePath;
        }
        $king->name = $request->input('name');
        $king->location = $request->input('location');
        $king->description = $request->input('description');
        $king->update();

        return redirect()->route('listeadminking')->with('success', 'King mis à jour avec succès !');
    }

    //Fin de la Gestion des kings



    // debut de la gestion des actualités
    public function createActualite(Request $request)
    {
        $request->validate([
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location'=>'required|string|max:255',
            'description'=>'required|string|max:1000',
        ]);
        $actualites= new Actualite();
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('actualite', 'public');
            $actualites->image = $imagePath;
        }
        $actualites->location = $request->input('location');
        $actualites->description = $request->input('description');
        $actualites->save();
        return redirect()->back()->with('success', 'Actualité ajoutée avec succès !');
    }

    public function updateActualite(Request $request, $id)
    {
        $request->validate([
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location'=>'required|string|max:255',
            'description'=>'required|string|max:1000',
        ]);

        $actualites = Actualite::find($id);
        if (!$actualites) {
            return redirect()->back()->with('error', 'Actualité non trouvée.');
        }

        if ($request->hasFile('image')) {
            // Sauvegarder la nouvelle image
            $imagePath = $request->file('image')->store('actualite', 'public');
            $actualites->image = $imagePath;
        }
        $actualites->location = $request->input('location');
        $actualites->description = $request->input('description');
        $actualites->update();

        return redirect()->route('listeadminactualite')->with('success', 'Actualité mise à jour avec succès !');
    }
    //Fin de la Gestion des actualités

    
    //Debut de la Gestion de l'accueil
    public function createAccueil(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        // Logic to handle the creation of a AccueilCorrousel item
        $accueil = new Accueilcorrousel();
        if ($request->hasFile('image')) {
            // Sauvegarder l'image
            $imagePath = $request->file('image')->store('accueil', 'public');
            $accueil->image = $imagePath;
        }
        $accueil->title = $request->input('title');
        $accueil->description = $request->input('description');
        $accueil->save();
        return redirect()->back()->with('success', 'Accueil ajouté avec succès !');
    }
    public function updateAccueil(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $accueil = Accueilcorrousel::find($id);
        if (!$accueil) {
            return redirect()->back()->with('error', 'Élément d\'accueil non trouvé.');
        }

        if ($request->hasFile('image')) {
            // Sauvegarder la nouvelle image
            $imagePath = $request->file('image')->store('accueil', 'public');
            $accueil->image = $imagePath;
        }
        $accueil->title = $request->input('title');
        $accueil->description = $request->input('description');
        $accueil->update();

        return redirect()->route('listeadminaccueil')->with('success', 'Élément d\'accueil mis à jour avec succès !');
    }

    
    //Fin de la Gestion de l'accueil

    // debut de la gestion des promotions
    public function createPromotions(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'discountstart' => 'required|numeric|min:0',
            'discountend' => 'required|numeric|min:0',

            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'description' => 'required|string',
        ]);
        // Logic to handle the creation of a Promotions item
        $promotions = new Promotion();
        if ($request->hasFile('image')) {
            // Sauvegarder l'image
            $imagePath = $request->file('image')->store('promotions', 'public');
            $promotions->image = $imagePath;
        }
        $promotions->title = $request->input('title');
        $promotions->discountstart = $request->input('discountstart');
        $promotions->discountend = $request->input('discountend');
        $promotions->start_date = $request->input('start_date');
        $promotions->end_date = $request->input('end_date');
        $promotions->description = $request->input('description');
        $promotions->save();
        return redirect()->back()->with('success', 'Promotion ajoutée avec succès !');
    }
    public function updatePromotion(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'discountstart' => 'required|numeric|min:0',
            'discountend' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'description' => 'required|string',
        ]);

        $promotions = Promotion::find($id);
        if (!$promotions) {
            return redirect()->back()->with('error', 'Promotion non trouvée.');
        }

        if ($request->hasFile('image')) {
            // Sauvegarder la nouvelle image
            $imagePath = $request->file('image')->store('promotions', 'public');
            $promotions->image = $imagePath;
        }
        $promotions->title = $request->input('title');
        $promotions->discountstart = $request->input('discountstart');
        $promotions->discountend = $request->input('discountend');
        $promotions->start_date = $request->input('start_date');
        $promotions->end_date = $request->input('end_date');
        $promotions->description = $request->input('description');
        $promotions->update();

        return redirect()->route('listeadminpromotions')->with('success', 'Promotion mise à jour avec succès !');
    }   
    
    //Fin de la Gestion des promotions

    

}

