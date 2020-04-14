<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpcoesCartoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcoes_cartoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('negocio_id');
            $table->integer('valor');
            $table->string('descricao');

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
        Schema::table('opcoes_cartoes', function (Blueprint $table) {
            //
        });
    }
}
