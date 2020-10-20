<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProductosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('id_producto')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('sku')->nullable();
            $table->string('codigo_producto')->nullable();
            $table->text('descripcion')->nullable();
            $table->text('descripcion2')->nullable();
            $table->string('unidades_paquete')->nullable();
            $table->string('volumen')->nullable();
            $table->integer('id_unidad')->nullable();
            $table->integer('id_origen')->nullable();
            $table->integer('id_moneda')->nullable();
            $table->string('precio')->nullable();
            $table->integer('id_tipo_precio')->nullable();
            $table->string('tiempo_entrega')->nullable();
            $table->integer('estatus')->nullable();
            $table->integer('activo')->nullable();
            $table->text('foto1')->nullable();
            $table->text('foto2')->nullable();
            $table->text('foto3')->nullable();
            $table->text('foto4')->nullable();
            $table->text('foto5')->nullable();
            $table->integer('id_clasificador')->nullable();
            $table->integer('id_subcategoria')->nullable();
            $table->integer('id_categoria')->nullable();
            $table->integer('id_fabricante')->nullable();
            $table->string('codigo_barras')->nullable();
            $table->string('presentacion')->nullable();
            $table->integer('id_color')->nullable();
            $table->string('pedido_minimo')->nullable();
            $table->integer('id_vende')->nullable();
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
        Schema::drop('tbl_productos');
    }
}
