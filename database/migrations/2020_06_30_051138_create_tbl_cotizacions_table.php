<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCotizacionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cotizacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('interesado');
            $table->string('direccion');
            $table->string('colonia');
            $table->string('cp');
            $table->string('num_ext');
            $table->string('num_int');
            $table->string('local');
            $table->text('comentarios');
            $table->integer('estatus');
            $table->string('telefono');
            $table->string('correo');
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
        Schema::drop('tbl_cotizacions');
    }
}
