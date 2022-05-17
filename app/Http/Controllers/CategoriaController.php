<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class CategoriaController extends Controller
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
        #Recupera todas categorias e envia a view index
        Gate::authorize("acesso-administrador");
        $categorias = Categoria::all();

        return view('categoria.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('categoria.create');
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
            $categoria = new Categoria();
            $dados = $request->only($categoria->getFillable());
            Categoria::create($dados);
            echo "Inserido com sucesso!";
            return redirect()->action([CategoriaController::class, 'index']);

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
        $categoria = Categoria::findOrFail($id);
        return view("categoria.edit", compact("categoria"));
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
            $categoria = new Categoria();
            $dados = $request->only($categoria ->getFillable());
            Categoria::whereId($id)->update($dados);
            return redirect()->action([CategoriaController::class, 'index']);
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
            Categoria::destroy($id);
            return redirect()->action([CategoriaController::class, 'index']);
        }
        catch (\Exception $e){
            echo "Erro ao excluir"+$e->getMessage();
        }
    }

}
