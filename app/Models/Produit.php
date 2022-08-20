<?php

namespace App\Models;

use App\Models\Commande;
use App\Models\Categorie;
use App\Models\Traitement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }

    public function traitements()
    {
        return $this->belongsToMany(Traitement::class);
    }
}
