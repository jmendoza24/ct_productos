<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblArticulosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_modulo')->nullable();
            $table->string('articulo')->nullable();
            $table->text('contenido')->nullable();
            $table->string('fragmento')->nullable();
            $table->string('monto')->nullable();
            $table->integer('id_moneda')->nullable();
            $table->integer('activo')->nullable();
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
        Schema::drop('tbl_articulos');
    }
}
