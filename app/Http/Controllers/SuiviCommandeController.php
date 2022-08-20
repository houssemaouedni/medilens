<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class SuiviCommandeController extends Controller
{
    //
    public function index()
    {
        $commandes = Commande::all()->where('user_id', auth()->user()->id)->sortByDesc('id');
        return view('commande.suivi.suivie_commande', [
            'commandes' => collect($commandes)->paginate(6)
        ]);
    }
}
