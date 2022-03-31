<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TravelPackages', function (Blueprint $table) {
            $table->id();

            $table->string("nome", 100);
            $table->string("descrizione")->nullable();
            $table->integer("prezzo");
            $table->string("indirizzo", 150);
            $table->integer("numero_recensioni")->nullable();
            $table->tinyInteger("numero_giorni");
            $table->tinyInteger("percentuale_sconto_bambini")->nullable();

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
        Schema::dropIfExists('TravelPackages');
    }
}
