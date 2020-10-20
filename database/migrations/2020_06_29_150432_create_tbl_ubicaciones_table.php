<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUbicacionesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ubicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_direccion')->nullable();
            $table->string('ubicacion')->nullable();
            $table->integer('id_estado')->nullable();
            $table->integer('id_municipio')->nullable();
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
        Schema::drop('tbl_ubicaciones');
    }
}
