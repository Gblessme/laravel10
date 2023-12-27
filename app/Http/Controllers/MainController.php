<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $actus = Actu::all();
        return view ( 'home',[
            'actus' => $actus,
        ]); 
    } 
    public function menu()
    {
        $categories = ['Petit déjeuner', 'Entrées', 'Plats', 'Desserts', 'Boissons'];

        return view('menu', ['categories' => scategories]);
    // variables qui peuvent être
    }

    public function reservation()
    {
     return view('reservation');
    }
}