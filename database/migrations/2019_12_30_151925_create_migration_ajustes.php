<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrationAjustes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajustes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('punto_id')->unsigned();
            $table->Integer('difusor_id')->unsigned();
            $table->Integer('fragancia_id')->unsigned();
            $table->foreign('punto_id')->references('id')->on('puntos');
            $table->foreign('difusor_id')->references('id')->on('difusores');
            $table->foreign('fragancia_id')->references('id')->on('fragancias');
            $table->string('ajuste_dias');
            $table->string('ajuste_proporcion');
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
        Schema::dropIfExists('migration_ajustes');
    }
}
