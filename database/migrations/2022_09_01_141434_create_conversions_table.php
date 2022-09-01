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
        Schema::create('conversions', function (Blueprint $table) {
            $table->id('id_conversion');

            $table->unsignedBigInteger('moneda_id');
            // $table->unsignedBigInteger('pais_id');

            $table->foreign('moneda_id')->references('id_moneda')->on('monedas');
            // $table->foreign('pais_id')->references('id_pais')->on('pais');



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
        Schema::dropIfExists('conversions');
    }
};
