<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Compra;
use App\Models\Produto;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class ProdutosPreco extends BaseChart
{
    public ?string $name = 'ProdutosPreco';


    public ?array $middlewares = ['auth'];

    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $produtos = Produto::pluck('nome')->toArray();
        $precos = Produto::pluck('preco')->toArray();
        return Chartisan::build()
            ->labels($produtos)
            ->dataset('Valores', $precos);
    }

}
