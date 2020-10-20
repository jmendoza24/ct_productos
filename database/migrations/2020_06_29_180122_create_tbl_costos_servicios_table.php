<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCostosServiciosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_costos_servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_direccion')->nullable();
            $table->integer('id_servicio')->nullable();
            $table->string('articulo')->nullable();
            $table->string('fraccion')->nullable();
            $table->string('monto')->nullable();
            $table->string('moneda')->nullable();
            $table->text('comentarios')->nullable();
            $table->string('periodicidad')->nullable();
            $table->integer('id_subservicio')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });    

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_costos_servicios');
    }
}
