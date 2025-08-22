<?php

namespace App\Http\Controllers;
use App\Models\Gros;
use App\Models\Demi;
use App\Models\King;
use Illuminate\Http\Request;

class ControllerPages extends Controller
{
    public function accueil()
    {
        return view('pages.accueil');
        
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

    public function about(){
        return view('pages.about');
    }
}
