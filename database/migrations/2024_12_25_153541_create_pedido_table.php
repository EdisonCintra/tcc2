<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoTable extends Migration
{
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->id(); // PK
            $table->foreignId('id_cliente')->constrained('cliente'); // FK para cliente
            $table->decimal('valor_total', 10, 2);
            $table->string('status', 15);
            $table->date('data');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('pedido', function (Blueprint $table) {
            $table->dropForeign(['id_cliente']); // Remove a FK antes de dropar a tabela
        });
        Schema::dropIfExists('pedido');
    }

}
