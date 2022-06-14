<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Fornecedor;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProdutoController extends Controller
{
    public function __construct()
    {
        # garante o acesso dos methods apenas a usuário authenticado
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #Recupera todas produtos e envia a view index
        Gate::authorize("acesso-administrador");
        $produtos = Produto::all();

        return view('produto.index', compact('produtos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $produto = new Produto();
            $dados = $request->only($produto->getFillable());
            Produto::create($dados);
            return redirect()->action([ProdutoController::class, 'index'])
                ->with("resposta", "Registro inserido");
        } catch (\Exception $e) {
            return redirect()->action(
                [ProdutoController::class, 'index'])
                ->with("resposta", "Erro ao inserir!");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fornecedores = Fornecedor::all();
        $categorias = Categoria::all();
        return view('produto.create', compact(
            'fornecedores', 'categorias'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fornecedores = Fornecedor::all();
        $categorias = Categoria::all();
        $produto = Produto::findOrFail($id);
        return view("produto.edit", compact("fornecedores", "categorias", "produto"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $produto = new Produto();
            $dados = $request->only($produto->getFillable());
            Produto::whereId($id)->update($dados);
            return redirect()->action([ProdutoController::class, "index"])
                ->with("resposta", "Registro alterado");
        } catch (\Exception $e) {
            return redirect()->action([ProdutoController::class, "index"])
                ->with("resposta", "Erro ao alterar");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Produto::destroy($id);
            return redirect()->action([ProdutoController::class, 'index'])
                ->with("resposta", "Registro excluido!");
        } catch (\Exception $e) {
            return redirect()->action([ProdutoController::class, 'index'])
                ->with("resposta", "Erro ao excluir!");
        }
    }

}
