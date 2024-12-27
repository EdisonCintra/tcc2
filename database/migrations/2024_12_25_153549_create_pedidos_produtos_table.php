<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosProdutosTable extends Migration
{
    public function up()
    {
        Schema::create('pedidos_produtos', function (Blueprint $table) {
            $table->foreignId('id_pedido')->constrained('pedido');
            $table->foreignId('id_produto')->constrained('produto');
            $table->decimal('valor_unitario', 10, 2);
            $table->integer('quantidade');
            $table->boolean('faturado');
            $table->timestamps();
            $table->primary(['id_pedido', 'id_produto']); // Chave primária composta
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedidos_produtos');
    }
}
