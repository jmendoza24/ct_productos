<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblFabricantesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_fabricantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('razon')->nullable();
            $table->string('rfc')->nullable();
            $table->string('web')->nullable();
            $table->string('tel1')->nullable();
            $table->string('tel2')->nullable();
            $table->string('direccion')->nullable();
            $table->string('colonia')->nullable();
            $table->string('cp')->nullable();
            $table->string('estado')->nullable();
            $table->string('municipio')->nullable();
            $table->integer('pais')->nullable();
            $table->text('condiciones')->nullable();
            $table->text('comentarios')->nullable();
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
        Schema::drop('tbl_fabricantes');
    }
}
