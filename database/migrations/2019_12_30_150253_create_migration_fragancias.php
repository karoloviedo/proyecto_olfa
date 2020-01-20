<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrationFragancias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fragancias', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('fragancia_id')->unsigned();
            $table->string('name');
            $table->BigInteger('tipo_fragancia')->unsigned();
            $table->foreign('tipo_fragancia')->references('id')->on('tipo_fragancia');
            $table->float('gravedad_especifica', 15, 8);
            $table->smallInteger('proporcion')->unsigned();
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
        Schema::dropIfExists('migration_fragancias');
    }
}
