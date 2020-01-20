<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrationPuntos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('nit')->unsigned();
            $table->foreign('nit')->references('nit')->on('clientes');
            $table->smallInteger('covende')->unsigned();
            $table->foreign('covende')->references('id')->on('regionales');
            $table->smallInteger('coatiende')->unsigned();
            $table->foreign('coatiende')->references('id')->on('regionales');
            $table->bigInteger('contrato')->unsigned();
            $table->smallInteger('linea')->unsigned();
            $table->smallInteger('sublinea')->unsigned();
            $table->tinyInteger('estado_contrato')->unsigned();
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
        Schema::dropIfExists('migration_puntos');
    }
}
