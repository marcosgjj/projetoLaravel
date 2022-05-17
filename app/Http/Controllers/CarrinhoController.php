<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
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
        #Recupera todas carrinhos e envia a view index
        Gate::authorize("acesso-administrador");
        $carrinho = Carrinho::all();

        return view('carrinho.index', compact('carrinho'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('carrinho.create');
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
            $carrinho = new Carrinho();
            $dados = $request->only($carrinho->getFillable());
            Carrinho::create($dados);
            echo "Inserido com sucesso!";
            return redirect()->action([CarrinhoController::class, 'index']);

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
        $carrinho = Carrinho::findOrFail($id);
        return view("carrinho.edit", compact("carrinho"));
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
            $carrinho = new Carrinho();
            $dados = $request->only($carrinho ->getFillable());
            Carrinho::whereId($id)->update($dados);
            return redirect()->action([CarrinhoController::class, 'index']);
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
            Carrinho::destroy($id);
            return redirect()->action([CarrinhoController::class, 'index']);
        }
        catch (\Exception $e){
            echo "Erro ao excluir"+$e->getMessage();
        }
    }

}
