<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->delete();
        $categorias = [
            [
                'descricao' => 'Tênis',
            ],
            [
                'descricao' => 'Sapatos',
            ],
            [
                'descricao' => 'Sandalias',
            ]
        ];
        Categoria::insert($categorias);
    }
}
