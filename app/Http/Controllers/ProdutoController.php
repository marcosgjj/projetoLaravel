<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

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
        $produto = Produto::all();

        return view('produto.index', compact('produto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('produto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $produto = new Produto();
            $dados = $request->only($produto->getFillable());
            Produto::create($dados);
            echo "Inserido com sucesso!";
            return redirect()->action([ProdutoController::class, 'index']);

        }
        catch (\Exception $e){
            echo "Erro ao inserir!";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view("produto.edit", compact("produto"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $produto = new Produto();
            $dados = $request->only($produto ->getFillable());
            Produto::whereId($id)->update($dados);
            return redirect()->action([ProdutoController::class, 'index']);
        }
        catch (\Exception $e){
            echo "Erro ao alterar:".$e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Produto::destroy($id);
            return redirect()->action([ProdutoController::class, 'index']);
        }
        catch (\Exception $e){
            echo "Erro ao excluir"+$e->getMessage();
        }
    }

}
