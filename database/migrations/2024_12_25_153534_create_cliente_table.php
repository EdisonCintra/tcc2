<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id(); // PK
            $table->string('name', 120);
            $table->string('phone', 12);
            $table->string('email', 120);
            $table->string('cpf', 11);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::disableForeignKeyConstraints(); // Desativa restrições temporariamente
        Schema::dropIfExists('cliente');
        Schema::enableForeignKeyConstraints(); // Reativa as restrições
    }

}
