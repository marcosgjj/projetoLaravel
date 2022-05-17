<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;

    protected $fillable = [
        'bandeiraCartao',
        'qtdProduto',
        'metodoPagamento',
        'totalAPagar',
        'produto_id',


    ];
}
