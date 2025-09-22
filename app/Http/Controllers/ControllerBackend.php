<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;
use App\Models\Demi;
use App\Models\Gros;
use App\Models\King;
use App\Models\Accueilcorrousel;
use App\Models\Promotion;
use App\Models\User;
use App\Models\Activite;
use App\Models\About;
use App\Models\Aboutsection;
use App\Models\Contact; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


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
    public function deleteDemi($id)
    {
        $demi = Demi::find($id);
        if (!$demi) {
            return redirect()->back()->with('error', 'Demi non trouvé.');
        }
        $demi->delete();
        return redirect()->route('listeadmindemi')->with('success', 'Demi supprimé avec succès !');
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
    public function deleteGros($id)
    {
        $gros = Gros::find($id);
        if (!$gros) {
            return redirect()->back()->with('error', 'Gros non trouvé.');
        }
        $gros->delete();
        return redirect()->route('listeadmingros')->with('success', 'Gros supprimé avec succès !');
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
    public function deleteKing($id)
    {
        $king = King::find($id);
        if (!$king) {
            return redirect()->back()->with('error', 'King non trouvé.');
        }
        $king->delete();
        return redirect()->route('listeadminking')->with('success', 'King supprimé avec succès !');
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
    public function deleteActualite($id)
    {
        $actualites = Actualite::find($id);
        if (!$actualites) {
            return redirect()->back()->with('error', 'Actualité non trouvée.');
        }
        $actualites->delete();
        return redirect()->route('listeadminactualite')->with('success', 'Actualité supprimée avec succès !');
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

    public function deleteAccueil($id)
    {
        $accueil = Accueilcorrousel::find($id);
        if (!$accueil) {
            return redirect()->back()->with('error', 'Élément d\'accueil non trouvé.');
        }
        $accueil->delete();
        return redirect()->route('listeadminaccueil')->with('success', 'Élément d\'accueil supprimé avec succès !');
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
    public function deletePromotion($id)
    {
        $promotions = Promotion::find($id);
        if (!$promotions) {
            return redirect()->back()->with('error', 'Promotion non trouvée.');
        }
        $promotions->delete();
        return redirect()->route('listeadminpromotions')->with('success', 'Promotion supprimée avec succès !');
    }
    //Fin de la Gestion des promotions


    //debut de la gestion des Activites
        public function createActivites(Request $request)
        {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'title' => 'required|string|max:255',
                'description' => 'required|string',
            ]);

            // Logic to handle the creation of an Activite
            $activite = new Activite();
            if ($request->hasFile('image')) {
                // Sauvegarder l'image
                $imagePath = $request->file('image')->store('activites', 'public');
                $activite->image = $imagePath;
            }
            $activite->title = $request->input('title');
            $activite->description = $request->input('description');
            $activite->save();

            return redirect()->back()->with('success', 'Activité ajoutée avec succès !');
        }

        public function updateActivites(Request $request, $id)
        {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'title' => 'required|string|max:255',
                'description' => 'required|string',
            ]);

            $activite = Activite::find($id);
            if (!$activite) {
                return redirect()->back()->with('error', 'Activité non trouvée.');
            }

            if ($request->hasFile('image')) {
                // Sauvegarder la nouvelle image
                $imagePath = $request->file('image')->store('activites', 'public');
                $activite->image = $imagePath;
            }
            $activite->title = $request->input('title');
            $activite->description = $request->input('description');
            $activite->update();

            return redirect()->route('listeadminactivites')->with('success', 'Activité mise à jour avec succès !');
        }

        public function deleteActivite($id)
        {
            $activite = Activite::find($id);
            if (!$activite) {
                return redirect()->back()->with('error', 'Activité non trouvée.');
            }
            $activite->delete();
            return redirect()->route('listeadminactivites')->with('success', 'Activité supprimée avec succès !');
        }

    //Fin de la Gestion des activités


    // debut de la gestion apropos
     public function createAbout(Request $request){
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Logic to handle the creation of an About
        $about = new About();
        if ($request->hasFile('image')) {
            // Sauvegarder l'image
            $imagePath = $request->file('image')->store('about', 'public');
            $about->image = $imagePath;
        }
        $about->title = $request->input('title');
        $about->description = $request->input('description');
        $about->save();

        return redirect()->back()->with('success', 'Section À propos ajoutée avec succès !');

    }

    public function updateAbout(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $about = About::find($id);
        if (!$about) {
            return redirect()->back()->with('error', 'Section À propos non trouvée.');
        }

        if ($request->hasFile('image')) {
            // Sauvegarder la nouvelle image
            $imagePath = $request->file('image')->store('about', 'public');
            $about->image = $imagePath;
        }
        $about->title = $request->input('title');
        $about->description = $request->input('description');
        $about->update();

        return redirect()->route('listeadminabout')->with('success', 'Section À propos mise à jour avec succès !');
    }
    public function deleteAbout($id)
    {
        $about = About::find($id);
        if (!$about) {
            return redirect()->back()->with('error', 'Section À propos non trouvée.');
        }
        $about->delete();
        return redirect()->route('listeadminabout')->with('success', 'Section À propos supprimée avec succès !');
    }

    // Fin de la gestion apropos

    //debut gestion section about

    public function createAboutSection(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Logic to handle the creation of an About Section
        $aboutSection = new Aboutsection();
        if ($request->hasFile('image')) {
            // Sauvegarder l'image
            $imagePath = $request->file('image')->store('aboutsections', 'public');
            $aboutSection->image = $imagePath;
        }
        $aboutSection->title = $request->input('title');
        $aboutSection->description = $request->input('description');
        $aboutSection->save();

        return redirect()->back()->with('success', 'Section À propos ajoutée avec succès !');
    }

    public function updateAboutSection(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $aboutSection = Aboutsection::find($id);
        if (!$aboutSection) {
            return redirect()->back()->with('error', 'Section À propos non trouvée.');
        }

        if ($request->hasFile('image')) {
            // Sauvegarder la nouvelle image
            $imagePath = $request->file('image')->store('aboutsections', 'public');
            $aboutSection->image = $imagePath;
        }
        $aboutSection->title = $request->input('title');
        $aboutSection->description = $request->input('description');
        $aboutSection->update();

        return redirect()->route('listeadminaboutsection')->with('success', 'Section À propos mise à jour avec succès !');
    }

    public function deleteAboutSection($id)
    {
        $aboutSection = Aboutsection::find($id);
        if (!$aboutSection) {
            return redirect()->back()->with('error', 'Section À propos non trouvée.');
        }
        $aboutSection->delete();
        return redirect()->route('listeadminaboutsection')->with('success', 'Section À propos supprimée avec succès !');
    }

    //fin gestion section about

    //USERS
    public function createUsers(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'fonction' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Logic to handle the creation of a User
        $user = new User();
        $user->name = $request->input('name');
        $user->role = 'user';
        $user->fonction = $request->input('fonction');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));     
        $user->save();

        return redirect()->route('login')->with('success', 'Utilisateur créé avec succès ! Vous pouvez maintenant vous connecter.');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::user()->role == 'admin')
            {
              return redirect()->intended('dashboard')->with('success', 'Connexion réussie !');
            }else{
                return redirect()->intended('/');
            }


        }else{
            return back()->withErrors([
                'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
            ])->onlyInput('email');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Vous avez été déconnecté avec succès.');
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'fonction' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'password' => 'nullable|string|min:8',
        ]);

        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Utilisateur non trouvé.');
        }

        $user->name = $request->input('name');
        $user->role = $request->input('role');
        $user->fonction = $request->input('fonction');
        $user->email = $request->input('email');
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }
        $user->update();

        return redirect()->route('listeadminusers')->with('success', 'Utilisateur mis à jour avec succès !');
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Utilisateur non trouvé.');
        }
        $user->delete();
        return redirect()->route('listeadminusers')->with('success', 'Utilisateur supprimé avec succès !');
    }

    //fin users

    //Gestion des contacts
    public function createContacts(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:contacts',
            'message' => 'required|string',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
        ]);

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->phone = $request->input('phone');
        $contact->subject = $request->input('subject');
        $contact->save();

        return redirect()->back()->with('success', 'Message envoyé avec succès !');
    }
}
