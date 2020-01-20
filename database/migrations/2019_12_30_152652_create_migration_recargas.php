<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrationRecargas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recargas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('difusor_id')->unsigned();
            $table->foreign('difusor_id')->references('id')->on('difusores');
            $table->integer('capacidad')->unsigned();
            $table->date('fcha_recarga');
            $table->float("dias");
            $table->date('fcha_cmbio_prog');
            $table->date('fcha_est_prod');
            $table->date('fcha_est_cmbio');
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
        Schema::dropIfExists('migration_recargas');
    }
}
