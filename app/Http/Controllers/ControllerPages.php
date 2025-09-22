<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckRole;
use App\Models\Accueilcorrousel;
use App\Models\Gros;
use App\Models\Demi;
use App\Models\King;
use App\Models\Actualite;
use App\Models\Promotion;
use App\Models\User;
use App\Models\Activite;
use App\Models\About;
use App\Models\Aboutsection;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;


use Illuminate\Http\Request;

class ControllerPages extends Controller
{
    // debut accueil
    public function accueil()
    {
         $actualites = Actualite::orderBy('created_at', 'desc')
                            ->take(4) // récupérer seulement les 3 dernières
                            ->get();
        $gros = Gros::count();
        $demi = Demi::count();
        $king = King::count();
        $accueils = Accueilcorrousel::all();
        $promotions = Promotion::all();
        $activites = Activite::all();
        $aboutsections = Aboutsection::orderBy('created_at', 'asc')->take(1)->get();
        return view('pages.accueil', compact('actualites', 'gros', 'demi', 'king', 'accueils', 'promotions', 'activites', 'aboutsections'));

    }
    public function accueilviewadd(){
        return view('admin.pages.ajoutaccueil');
    }
    public function editAccueil($id)
    {
        $accueil = Accueilcorrousel::find($id);
        return view('admin.update.updateaccueil', compact('accueil'));
    }


    // fin accueil

    //debut promotions
    // public function promotions()
    // {
    //     $promotions = Promotion::all();
    //     return view('pages.promotions', compact('promotions'));
    // }

    public function AddPromotions()
    {
        return view('admin.pages.ajoutpromotion');
    }
    public function editPromotion($id)
    {
        $promotions = Promotion::find($id);
        return view('admin.update.updatepromo', compact('promotions'));
    }

    // fin promotions

    //debut activites

    public function activites()
    {
        $activites = Activite::all();
        return view('pages.activites', compact('activites'));
    }

    public function AddActivites()
    {
        return view('admin.pages.ajoutactivite');
    }

    public function editActivites($id)
    {
        $activites = Activite::find($id);
        return view('admin.update.updateactivite', compact('activites'));
    }
    //fin activites

    // debut de la gestion apropos
    public function about(){
        $about = About::all();
        $aboutsections = Aboutsection::all();
        return view('pages.about', compact('about', 'aboutsections'));

    }

    public function editAbout($id)
    {
        $about = About::find($id);
        return view('admin.update.updateabout', compact('about'));
    }

    public function listeAbout(){
        $about = About::all();
        return view('admin.pages.ajoutabout', compact('about'));
    }
    public function listeAdminAbout(){
        $about = About::all();
        return view('admin.pages.listeadminabout', compact('about'));
    }
    // Fin de la gestion apropos

    //debut aboutsections

   
    public function editAboutSection($id)
    {
        $aboutsection = Aboutsection::find($id);
        return view('admin.update.updateaboutsection', compact('aboutsection'));
    }
    public function listeAboutSection(){
        $aboutsections = Aboutsection::all();
        return view('admin.pages.ajoutaboutsection', compact('aboutsections'));
    }
    public function listeAdminAboutSection(){
        $aboutsections = Aboutsection::all();
        return view('admin.pages.listeaboutsection', compact('aboutsections'));
    }

    // fin aboutsections

    // debut de la gestion des gros
    public function gros()
    {
        
     return view('admin.pages.ajoutegros');
        
    }
    public function listegros()
    {
        $gros = Gros::all();
        return view('pages.gros', compact('gros'));
    }
    public function editGros($id)
    {
        $gros = Gros::find($id);
        return view('admin.update.updategros', compact('gros'));
    }
    // fin de la gestion des gros


    // debut de la gestion des demi
    public function demi()
    {
        return view('admin.pages.ajoutdemi');

    }
    public function listedemi()
    {
        $demi = Demi::all();
        return view('pages.demigros', compact('demi'));
    }
    public function editDemi($id)
    {
        $demi = Demi::find($id);
        return view('admin.update.updatedemi', compact('demi'));
    }
    // fin de la gestion des demi

    // debut de la gestion des kings
    public function king()
    {
        return view('admin.pages.ajoutking');

    }
    
    public function listking(){
        $king=King::all();
        return view('pages.kingcash', compact('king'));
    }
    public function editKing($id)
    {
        $king = King::find($id);
        return view('admin.update.updateking', compact('king'));
    }
    // fin de la gestion des kings

    // debut de la gestion des actualités
    public function actualite()
    {
        return view('admin.pages.ajoutactualite');

    }
    public function listeactualite(){
        $actualites=Actualite::all();
        return view('pages.actualite', compact('actualites'));
    }
    public function editActualite($id)
    {
        $actualite = Actualite::find($id);
        return view('admin.update.updateactualite', compact('actualite'));
    }

    // fin de la gestion des actualités


    //Debut de contact
        public function contacts(){
            return view('pages.contacts');
        }
    //Fin contact

    // debut de la gestion dashboard
    public function dashboard(){
        $gros = Gros::count();
        $demi = Demi::count();
        $king = King::count();
        $actualites = Actualite::count();

        return view('admin.layout.dashboard', compact('gros', 'demi', 'king', 'actualites'));
    }
    
    public function listeAdminDemi(){
        $demi = Demi::all();
        return view('admin.pages.listeadmindemi', compact('demi'));
    }

    public function listeAdminGros(){
        $gros = Gros::all();
        return view('admin.pages.listeadmingros', compact('gros'));
    }

    public function listeAdminKing(){
        $king = King::all();
        return view('admin.pages.listeadminking', compact('king'));
    }

    public function listeAdminActualite(){
        $actualites = Actualite::all();
        return view('admin.pages.listeadminactualite', compact('actualites'));
    }
    public function listeAdminAccueil(){
        $accueils = Accueilcorrousel::all();
        return view('admin.pages.listeadminaccueil', compact('accueils'));
    }

    public function listeAdminPromotions(){
        $promotions = Promotion::all();
        return view('admin.pages.listepromotion', compact('promotions'));
    }

    public function listeAdminActivites(){
        $activites = Activite::all();
        return view('admin.pages.listeactivite', compact('activites'));
    }
    // fin de la gestion du dashboard

    //Gestion des users
    public function users(){
        return view('users.registers');
    }
    public function login(){
        return view('users.login');
    }
    public function listeAdminUsers(){
        $users = User::all();
        return view('users.listeusers', compact('users'));
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }
}