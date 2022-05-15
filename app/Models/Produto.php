<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'preco',
        'local',
        'fornecedor_id',
        'categoria_id'
    ];

    public function fornecedor(){
        return $this->belongsTo(Fornecedor::class);
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
