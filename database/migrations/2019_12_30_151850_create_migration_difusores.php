<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrationDifusores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('difusores', function (Blueprint $table) {
            $table->Increments('id');
            $table->BigInteger('modelo_id')->unsigned();
            $table->BigInteger('punto_id')->unsigned();
            $table->foreign('modelo_id')->references('id')->on('modelos');
            $table->foreign('punto_id')->references('id')->on('puntos');
            $table->string('cdgo_placa');
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
        Schema::dropIfExists('migration_difusores');
    }
}
