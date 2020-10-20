<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblInventariosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_inventarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_producto');
            $table->string('cantidad');
            $table->string('costo');
            $table->date('fecha_ingreso');
            $table->text('comentarios');
            $table->integer('id_usuario');
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
        Schema::drop('tbl_inventarios');
    }
}
