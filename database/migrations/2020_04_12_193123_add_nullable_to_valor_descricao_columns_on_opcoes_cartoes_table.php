<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNullableToValorDescricaoColumnsOnOpcoesCartoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('opcoes_cartoes', function (Blueprint $table) {
            $table->integer('valor')->nullable()->change();
            $table->string('descricao')->nullable()->change();
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
