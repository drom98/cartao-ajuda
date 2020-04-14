<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('opcao_id');
            $table->foreignId('negocio_id');
            $table->string('nome_cliente');
            $table->string('apelido_cliente');
            $table->boolean('estado');
            $table->timestamps();

            $table->foreign('opcao_id')->references('id')->on('opcoes_cartoes');
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
        Schema::dropIfExists('cartoes');
    }
}
