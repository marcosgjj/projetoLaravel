<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $categoria = new Categoria();
            $dados = $request->only($categoria->getFillable());
            Categoria::create($dados);
            echo "Inserido com sucesso!";
            return redirect()->action([CategoriaController::class, 'index']);
        } catch (\Exception $e) {
            return redirect()->action([CategoriaController::class, "index"])->with("resposta", "Erro ao inserir.");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoria.create');
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
        $categoria = Categoria::findOrFail($id);
//        dd($categoria);
        return view("categoria.edit", compact("categoria"));
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
            $categoria = new Categoria();
            $dados = $request->only($categoria->getFillable());
            Categoria::whereId($id)->update($dados);
            return redirect()->action([CategoriaController::class, 'index']);
        } catch (\Exception $e) {
            return redirect()->action([CategoriaController::class, "index"])->with("resposta", "Erro ao atualizar.");
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
            Categoria::destroy($id);
            return redirect()->action([CategoriaController::class, 'index']);
        } catch (\Exception $e) {
            return redirect()->action([CategoriaController::class, "index"])->with("resposta", "Erro ao excluir.");
        }
    }

}
