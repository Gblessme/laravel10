<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use App\Models\Categorie;
use App\Models\Plat;
use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function home()
    {
        $actus = Actu::all();
        return view('home', [
            'actus' => $actus,

        ]);
    }

    public function menu()
    {
        $categories =  Categorie::all();
        return view('menu', [
            'categories' => $categories,
        ]);
    }

    public function plat(int $id)
    {
        $plat =  Plat::find($id);   //genere une requete sql qui permet de recuperer un plat par son id
        return view('plat', [
            'plat' => $plat,
        ]);
    }
    public function reservation()
    {
        return view ('reservation');
    }
    
    public function reservationStore(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'couverts' => 'required',
            'heure' => 'required',
            'jour' => 'required',
            'telephone' => 'required',
            'commentaires' => '',
        ]);
        dd($validated);
    }
}

//model:outil de communication entre le controller et la bdd.
//le controller demande au model des données afin de les distribuer aux views
// dd, dump and die. envoie les données et s'arrête