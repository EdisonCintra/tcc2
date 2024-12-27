<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Tabela associada
    protected $table = 'cliente';

    // Campos que podem ser preenchidos em massa
    protected $fillable = ['name', 'phone', 'email', 'cpf'];

    // Relações
    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'id_cliente');
    }
}
