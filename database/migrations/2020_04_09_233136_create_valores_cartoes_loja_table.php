<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValoresCartoesLojaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valores_cartoes_loja', function (Blueprint $table) {
            $table->foreignId('valor_cartao_id');
            $table->foreignId('loja_id');

            $table->foreign('valor_cartao_id')->references('id')->on('valores_cartoes');
            $table->foreign('loja_id')->references('id')->on('lojas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valores_cartoes_loja');
    }
}
