<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTitulosListasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_titulos_listas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo1')->nullable();
            $table->string('titulo2')->nullable();
            $table->string('titulo3')->nullable();
            $table->string('titulo4')->nullable();
            $table->string('titulo5')->nullable();
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
        Schema::drop('tbl_titulos_listas');
    }
}
