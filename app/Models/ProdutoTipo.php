<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoTipo extends Model
{
    use HasFactory;

    // Tabela associada
    protected $table = 'produtos_tipos';

    // Campos que podem ser preenchidos em massa
    protected $fillable = ['tipo'];

    // Relações
    public function produtos()
    {
        return $this->hasMany(Produto::class, 'id_produto_tipo');
    }
}
