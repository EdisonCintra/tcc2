<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    // Tabela associada
    protected $table = 'pedidos';

    // Campos que podem ser preenchidos em massa
    protected $fillable = ['id_cliente', 'valor_total', 'status', 'data'];

    // Relações
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function produtos()
    {
        return $this->belongsToMany(Produto::class, 'pedidos_produtos', 'id_pedido', 'id_produto')
            ->withPivot('valor_unitario', 'quantidade', 'faturado');
    }
}
