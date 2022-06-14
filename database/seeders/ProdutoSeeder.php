<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->delete();
        $produtos = [
            [
            'nome' => 'Nike Shoes',
            'preco' => 142.5,
            'local' => 'Loja',
            'fornecedor_id' => 1,
            'categoria_id' => 1
            ],
            [
            'nome' => "Jordan's  Sneakers",
            'preco' => 122.5,
            'local' => 'Loja',
            'fornecedor_id' => 1,
            'categoria_id' => 1
            ]
        ];
        Produto::create($produtos);
    }
}
