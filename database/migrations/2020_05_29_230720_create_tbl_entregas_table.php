<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblEntregasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_entregas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente')->nullable();
            $table->string('direccion')->nullable();
            $table->string('colonia')->nullable();
            $table->string('cp')->nullable();
            $table->integer('id_estado')->nullable();
            $table->integer('id_municipio')->nullable();
            $table->integer('id_pais')->nullable();
            $table->text('comentarios')->nullable();
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
        Schema::drop('tbl_entregas');
    }
}
