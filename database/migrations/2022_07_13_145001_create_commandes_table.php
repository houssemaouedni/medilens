<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('quantite');
            $table->string('prix_total');
            $table->string('etat');
            $table->string('od');
            $table->string('og');
            $table->string('axe_od');
            $table->string('axe_og');
            $table->string('od_add');
            $table->string('og_add');
            $table->foreignId('produit_id')->constrained();
            $table->foreignId('client_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
};
