<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblVendedoresTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_vendedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('correo')->unique();
            $table->string('telefono')->nullable();
            $table->integer('id_tipo_vendedor')->nullable();
            $table->string('descuentos')->nullable(); 
            $table->string('direccion')->nullable();
            $table->string('colonia')->nullable();
            $table->integer('id_municipio')->nullable();
            $table->integer('id_estado')->nullable();
            $table->integer('id_pais')->nullable();
            $table->string('cp')->nullable();
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
        Schema::drop('tbl_vendedores');
    }
}
