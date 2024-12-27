<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoTipoTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('produto_tipo', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 120);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produto_tipo');
    }
};
