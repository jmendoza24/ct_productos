<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblEmpresasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('nombre_contacto')->nullable();
            $table->string('correo')->nullable();
            $table->string('celular')->nullable();
            $table->string('face')->nullable();
            $table->string('insta')->nullable();
            $table->string('web')->nullable();
            $table->string('logo')->nullable();
            $table->text('condiciones')->nullable();
            $table->string('tipo_cambio')->nullable();
            $table->string('rfc')->nullable();
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
        Schema::drop('tbl_empresas');
    }
}
