<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblClientesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('puesto')->nullable();
            $table->string('telefono')->nullable();
            $table->string('telefono2')->nullable();
            $table->string('correo')->nullable();
            $table->string('calle')->nullable();
            $table->string('colonia')->nullable();
            $table->integer('id_municipio')->nullable();
            $table->integer('id_estado')->nullable();
            $table->integer('cp')->nullable();
            $table->integer('id_pais')->nullable();
            $table->string('rfc')->nullable();
            $table->integer('estatus')->nullable();
            $table->integer('activo')->nullable();
            $table->string('comentarios')->nullable();
            $table->integer('id_tipo_cliente')->nullable();
            $table->integer('id_tipo_precio')->nullable();
            $table->string('descuento')->nullable();
            $table->integer('id_vendedor')->nullable();
            $table->text('datos_fac')->nullable();
            $table->text('datos_ent')->nullable();
            $table->string('razon')->nullable();
            $table->string('web')->nullable();
            $table->integer('tipo_persona')->nullable();

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
        Schema::drop('tbl_clientes');
    }
}
