<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // Tabela associada
    protected $table = 'produtos';

    // Campos que podem ser preenchidos em massa
    protected $fillable = ['id_produto_tipo', 'preco', 'quantidade', 'nome'];

    // Relações
    public function tipo()
    {
        return $this->belongsTo(ProdutoTipo::class, 'id_produto_tipo');
    }

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'pedidos_produtos', 'id_produto', 'id_pedido')
            ->withPivot('valor_unitario', 'quantidade', 'faturado');
    }
}
