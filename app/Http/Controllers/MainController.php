<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use App\Models\Categorie;
use App\Models\Plat;
use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    private $heures = [
        // crénaux du midi
        '12:00:00' =>'12:00',
        '12:30:00' =>'12:30',
        '13:00:00' =>'13:00',
        '13:30:00' =>'13:30',
        
        // crénaux du soir
        '20:00:00' =>'20:00',
        '20:30:00' =>'20:30',
        '21:00:00' =>'21:00',
        '21:30:00' =>'21:30',
    ];   

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
    return view ('reservation' ,[
        'heures' => $this->heures,
    ]);
    }
    
    public function reservationStore(Request $request)
    {
        $heures = implode(',', $this->heures);

        $validated = $request->validate([
            'nom' => 'required|min:3|max:50',
            'couverts' => 'required|numeric|gte:1|lte:16',
            'heure' => "required|in:{$heures}",
            'jour' => 'required|date|date_format:Y-m-d|after_or_equal:today',
            'telephone' => 'required',
            'commentaires' => '',
        ]);
        dd($validated);
    }
}

//model:outil de communication entre le controller et la bdd.
//le controller demande au model des données afin de les distribuer aux views
// dd, dump and die. envoie les données et s'arrête