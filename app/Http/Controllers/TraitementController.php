<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Traitement;
use Illuminate\Http\Request;

class TraitementController extends Controller
{
    //
    public function index()
    {
        $produits = Produit::all();
        $z= $produits->traitements;
        return view('admin.produit.traitement.index',[
            'produit' => $produits,
            'z' => $z,
        ]);
    }

    public function store_trairement(Request $request)
    {
        //
        $traitemets = Traitement::create([
            'nom' => $request->nom,
            'description' => $request->description,
        ]);
    }
}
