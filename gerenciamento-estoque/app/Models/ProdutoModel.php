<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    protected $table = 'produto';

    protected $fillable = [
        'id_categoria',
        'nome',
        'descricao',
        'preco',
        'quantidade'
    ];

    public function categoria()
    {
        return $this->belongsTo(CategoriaModel::class, 'id_categoria');
    }

    public function venda()
    {
        return $this->hasMany(VendaModel::class, 'id_produto');
    }
}
