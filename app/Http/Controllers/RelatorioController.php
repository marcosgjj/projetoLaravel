<?php

namespace App\Http\Controllers;

use App\Models\Produto;


use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class RelatorioController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        Gate::authorize("acesso-administrador");
        return view('relatorio.index');
    }

    public function show()
    {
        Gate::authorize("acesso-administrador");
        return view('relatorio.produto');
    }


    public function ListarProdutos()
    {
        $produtos = Produto::all();
        $pdf = PDF::loadView('relatorio.produto', compact('produtos'));
        return $pdf->stream();
    }

    public function ListarCompras()
    {
        $compras = Produto::all();
        $pdf = PDF::loadView('relatorio.compra', compact('compras'));
        return $pdf->stream();
    }
}
