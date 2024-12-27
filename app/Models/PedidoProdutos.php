<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoProdutos extends Model
{
    use HasFactory;

    // Tabela associada
    protected $table = 'pedidos_produtos';

    // Desativar timestamps automáticos
    public $timestamps = false;

    // Campos que podem ser preenchidos em massa
    protected $fillable = ['id_pedido', 'id_produto', 'valor_unitario', 'quantidade', 'faturado'];

    // Relações
    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'id_pedido');
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'id_produto');
    }
}
