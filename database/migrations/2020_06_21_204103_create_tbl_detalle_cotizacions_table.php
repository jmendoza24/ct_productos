<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDetalleCotizacionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_detalle_cotizacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cotizacion')->nullable();
            $table->integer('id_producto')->nullable();
            $table->integer('id_lista')->nullable();
            $table->string('costo')->nullable();
            $table->string('descuento')->nullable();
            $table->string('cantidad')->nullable();
            $table->text('comentarios_adicionales')->nullable();
            $table->string('tot_fila')->nullable();

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
        Schema::drop('tbl_detalle_cotizacions');
    }
}
