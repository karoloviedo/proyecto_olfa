<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrationConsumos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumos', function (Blueprint $table) {
            $table->Increments('id');
            $table->BigInteger('modelo_id')->unsigned();
            $table->foreign('modelo_id')->references('id')->on('modelos');
            $table->float('g1');
            $table->float('g2');
            $table->float('g3');
            $table->float('g4');
            $table->float('g5');
            $table->float('g6');
            $table->float('g7');
            $table->float('g8');
            $table->float('g9');
            $table->float('g10');
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
        Schema::dropIfExists('migration_consumos');
    }
}
