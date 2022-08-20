<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index_lentille()
    {
        $produits = Produit::all()->where('categorie_id', 1);

        return view('admin.produit.lentille',[
           
            'produits' => collect($produits)->paginate(7),

        ]);
    }
    public function index_nikon()
    {
        $produits = Produit::all()->where('categorie_id', 2);

        return view('admin.produit.nikon',[
            'produits' => collect($produits)->paginate(7),
        ]);

    }
    public function index_infinty()
    {
        $produits = Produit::all()->where('categorie_id', 3);
        return view('admin.produit.infinty',[
           
            'produits' => collect($produits)->paginate(7),
        ]);
    }


    public function store_lentille(Request $request)
    {

        try {
            // dd($request->all());exit();
            $produit = Produit::create([

                'nom' => $request->nom,
                'description' => $request->description,
                'prix' => $request->prix,
                'categorie_id' => $request->categorie_id,
                'thumbnail' => $request->file('thumbnail')->store('thumbnail', 'public'),
            ]);
            return redirect()->route('admin')->with('success', 'Produit ajouté avec succès');
        } catch (\Throwable $th) {

            ddd($th);
            // return redirect()->route('admin')->with('error', 'Erreur lors de l\'ajout du produit');
        }

    }
}
