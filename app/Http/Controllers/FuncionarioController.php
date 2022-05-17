<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
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
        #Recupera todas funcionarios e envia a view index
        Gate::authorize("acesso-administrador");
        $funcionarios = Funcionario::all();

        return view('funcionario.index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('funcionario.create');
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
            $funcionario = new Funcionario();
            $dados = $request->only($funcionario->getFillable());
            Funcionario::create($dados);
            echo "Inserido com sucesso!";
            return redirect()->action([FuncionarioController::class, 'index']);

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
        $funcionario = Funcionario::findOrFail($id);
        return view("funcionario.edit", compact("funcionario"));
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
            $funcionario = new Funcionario();
            $dados = $request->only($funcionario ->getFillable());
            Funcionario::whereId($id)->update($dados);
            return redirect()->action([FuncionarioController::class, 'index']);
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
            Funcionario::destroy($id);
            return redirect()->action([FuncionarioController::class, 'index']);
        }
        catch (\Exception $e){
            echo "Erro ao excluir"+$e->getMessage();
        }
    }

}
