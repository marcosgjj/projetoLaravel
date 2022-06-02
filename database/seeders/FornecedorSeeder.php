<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Fornecedors')->delete();
        $fornecedors = [
            'cnpj' => '123.456.789/10',
            'razao_social' => 'Fornecedor PP',
            'endereco' => 'Rua: Magalhães Almeida nª 268',
            'cidade' => 'Presidente Prudente',
            'cep' => '19510-552',
            'telefone' => '(18) 3225-1255',
            'nomeFantasia' => 'Sapatos e Cia'
        ];
        Fornecedor::create($fornecedors);
    }

}
