<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrationConfiguracionDias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracion_dias', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer("configuracion_id")->unsigned();
            $table->foreign('configuracion_id')->references('id')->on('configuraciones');
            $table->tinyInteger('dia');
            $table->time('hora_ini');
            $table->time('hora_fin');
            $table->tinyInteger('pos')->unsigned();
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
        Schema::dropIfExists('migration_configuracion_dias');
    }
}
