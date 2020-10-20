<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblListaPreciosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_lista_precios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_producto')->nullable();
            $table->string('lista1')->nullable();
            $table->string('lista2')->nullable();
            $table->string('lista3')->nullable();
            $table->string('lista4')->nullable();
            $table->string('lista5')->nullable();
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
        Schema::drop('tbl_lista_precios');
    }
}
