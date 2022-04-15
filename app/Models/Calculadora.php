<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculadora extends Model
{
    use HasFactory;

    protected $fillable = [
        'v1',
        'v2',
        'op',
        'r'
        ];
}
