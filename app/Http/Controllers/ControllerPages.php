<?php

namespace App\Http\Controllers;
use App\Models\Gros;
use App\Models\Demi;
use App\Models\King;
use App\Models\Actualite;

use Illuminate\Http\Request;

class ControllerPages extends Controller
{
    public function accueil()
    {
         $actualites = Actualite::orderBy('created_at', 'desc')
                            ->take(3) // récupérer seulement les 3 dernières
                            ->get();
        $gros = Gros::count();
        $demi = Demi::count();
        $king = King::count();
        return view('pages.accueil', compact('actualites', 'gros', 'demi', 'king'));

    }

    public function gros()
    {
        return view('admin.pages.ajoutegros');

    }
    public function listegros()
    {
        $gros = Gros::all();
        return view('pages.gros', compact('gros'));
    }



    public function demi()
    {
        return view('admin.pages.ajoutdemi');

    }
    public function listedemi()
    {
        $demi = Demi::all();
        return view('pages.demigros', compact('demi'));
    }


    public function king()
    {
        return view('admin.pages.ajoutking');

    }
    
    public function listking(){
        $king=King::all();
        return view('pages.kingcash', compact('king'));
    }


    public function actualite()
    {
        return view('admin.pages.ajoutactualite');

    }
    public function listeactualite(){
        $actualites=Actualite::all();
        return view('pages.actualite', compact('actualites'));
    }

    public function about(){
        return view('pages.about');
    }


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
}