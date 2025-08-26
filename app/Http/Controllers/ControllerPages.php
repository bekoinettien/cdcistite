<?php

namespace App\Http\Controllers;

use App\Models\Accueilcorrousel;
use App\Models\Gros;
use App\Models\Demi;
use App\Models\King;
use App\Models\Actualite;
use App\Models\Promotion;

use Illuminate\Http\Request;

class ControllerPages extends Controller
{
    // debut accueil
    public function accueil()
    {
         $actualites = Actualite::orderBy('created_at', 'desc')
                            ->take(3) // récupérer seulement les 3 dernières
                            ->get();
        $gros = Gros::count();
        $demi = Demi::count();
        $king = King::count();
        $accueils = Accueilcorrousel::all();
        $promotions = Promotion::all();
        return view('pages.accueil', compact('actualites', 'gros', 'demi', 'king', 'accueils', 'promotions'));

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
    public function promotions()
    {
        $promotions = Promotion::all();
        return view('pages.promotions', compact('promotions'));
    }

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



    // debut de la gestion apropos
    public function about(){
        return view('pages.about');
    }
    // Fin de la gestion apropos


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
    // fin de la gestion du dashboard
}