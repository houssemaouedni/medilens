<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class SuiviCommandeAdminController extends Controller
{
    //
    public function index_enattente()
    {
        $commandes = Commande::all()->where('etat', 0);
        return view('admin.commande.suivi.enattente',[
            'commandes' => collect($commandes)->paginate(5)
        ]);
    }

    public function index_livree()
    {
        $commandes = Commande::all()->where('etat', 1);
        return view('admin.commande.suivi.livree',[
            'commandes' => collect($commandes)->paginate(5)
        ]);
    }

    public function index_annulee()
    {
        $commandes = Commande::all()->where('etat', 5);
        return view('admin.commande.suivi.annulee',[
            'commandes' => collect($commandes)->paginate(5)
        ]);
    }

    public function index_encours()
    {
        $commandes = Commande::all()->where('etat', 2);
        return view('admin.commande.suivi.encours',[
            'commandes' => collect($commandes)->paginate(5)
        ]);
    }

    public function validee($id)
    {
        $commande = Commande::find($id);
        $commande->etat = 2;
        $commande->save();
        return redirect()->route('enattente')->with('success', 'Commande en coure de livraison');
    }

    public function livree($id)
    {
        $commande = Commande::find($id);
        $commande->etat = 1;
        $commande->save();
        return redirect()->route('enattente')->with('success', 'Commande livrée');
    }
}
