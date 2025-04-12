<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendaModel extends Model
{
    protected $table = 'venda';

    protected $fillable = [
        'id_produto',
        'quantidade',
        'total'
    ];

    public function produto()
    {
        return $this->belongsTo(VendaModel::class, 'id_produto');
    }
}
