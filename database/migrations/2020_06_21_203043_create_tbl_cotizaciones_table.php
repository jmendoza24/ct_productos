<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCotizacionesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cotizaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->integer('id_tipo_cliente')->nullable();
            $table->string('cliente')->nullable();
            $table->integer('id_cliente')->nullable();
            $table->string('correo')->nullable();
            $table->text('comentarios')->nullable();
            $table->integer('estatus')->nullable();
            $table->integer('id_usuario')->nullable();
            $table->string('descuento')->nullable();
            $table->string('iva')->nullable();
            $table->string('telefono')->nullable();
            $table->string('contacto')->nullable();
            $table->integer('id_contacto')->nullable();
            $table->string('condiciones')->nullable();
            $table->integer('lista')->nullable();
            $table->string('flete')->nullable();
            $table->string('anticipo')->nullable();
            $table->string('descuento_aplicado')->nullable();
            $table->string('tot_fila')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('tipo_cambio')->nullable();
            
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
        Schema::drop('tbl_cotizaciones');
    }
}
