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
            $table->string('etat');
            $table->string('od_sph');
            $table->string('od_cyl');
            $table->string('od_axe');
            $table->string('od_add');
            $table->string('og_sph');
            $table->string('og_cyl');
            $table->string('og_axe');
            $table->string('og_add');
            $table->foreignId('produit_id')->constrained();
            $table->string('od_quantite');
            $table->string('og_quantite');
            $table->string('prix_ht');
            $table->string('prix_total');
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
