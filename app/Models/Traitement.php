<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Traitement extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function produits()
    {
        return $this->belongsToMany(Produit::class);
    }
}
