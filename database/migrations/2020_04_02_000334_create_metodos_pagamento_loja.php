<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetodosPagamentoLoja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodos_pagamento_loja', function (Blueprint $table) {
            $table->foreignId('id_loja');
            $table->foreignId('id_metodo_pagamento');
            $table->timestamps();

            $table->foreign('id_loja')->references('id')->on('lojas');
            $table->foreign('id_metodo_pagamento')->references('id')->on('metodos_pagamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metodos_pagamento_loja');
    }
}
