<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommandeController extends Controller
{
    //

    public function index_lentille()
    {
        $produits = Produit::all()->where('categorie_id', 1);
        return view('commande.lentille',[
            'produits' => $produits
        ]);
    }

    public function index_nikon()
    {
        $produits = Produit::all()->where('categorie_id', 2);
        return view('commande.nikon',[
            'produits' => $produits
        ]);
    }

    public function index_infinty()
    {
        $produits = Produit::all()->where('categorie_id', 3);
        return view('commande.infinty',[
            'produits' => $produits
        ]);
    }

    public function store(Request $request)
    {

        try {
            //code...
            $client = new ClientController;
            $client_id = $client->create($request);

            $commande = Commande::create([
                'etat' => '0',
                'od_sph' => $request->od_sph,
                'od_cyl' => $request->od_cyl,
                'od_axe' => $request->od_axe,
                'od_add' => $request->od_add,
                'og_sph' => $request->og_sph,
                'og_cyl' => $request->og_cyl,
                'og_axe' => $request->og_axe,
                'og_add' => $request->og_add,
                'produit_id' => $request->produit_id,
                'od_quantite' => $request->od_quantite,
                'og_quantite' => $request->og_quantite,
                'prix_ht' => $request->prix_ht,
                'prix_total' => $request->prix_total,
                'client_id' => $client_id,
                'user_id' => Auth()->user()->id,

            ]);
            return redirect()->route('suivi')->with('success', 'Commande ajoutée avec succès');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->route('suivi')->with('error', 'Erreur lors de l\'ajout de la commande');
        }

    }


    public function show($id)
    {
        $commande = Commande::find($id);
        return view('commande.suivi.show', [
            'commande' => $commande
        ]);
    }


    public function index()
    {
        $commandes = Commande::all();
        return view('admin.commande.commande')->with('commandes', $commandes);
    }


}
