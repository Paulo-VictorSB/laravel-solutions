<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    protected $table = 'categoria';

    protected $fillable = [
        'nome'
    ];

    public function produto()
    {
        return $this->hasMany(CategoriaModel::class, 'id_categoria');
    }
}
