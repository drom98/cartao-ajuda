<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetodoPagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodo_pagamentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('negocio_id');
            $table->string('nome');
            $table->string('descricao');
            $table->timestamps();

            $table->foreign('negocio_id')->references('id')->on('negocios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metodo_pagamentos');
    }
}
