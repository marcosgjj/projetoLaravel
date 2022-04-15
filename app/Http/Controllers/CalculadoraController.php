<?php

namespace App\Http\Controllers;

use App\Models\Calculadora;
use Illuminate\Http\Request;

class CalculadoraController extends Controller
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
        #Recupera todas calculadoras e envia a view index
        $calculadoras = Calculadora::all();

        return view('calculadora.index', compact('calculadoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $v1 = $_POST['v1'];
        $v2 = $_POST['v2'];
        $op = $_POST['op'];
        $r = $_POST['r'];
        if($op == "+"){
            $r = $v1 + $v2;
        }else if($op == "-"){
            $r = $v1 - $v2;
        }else if($op == "*"){
            $r = $v1 * $v2;
        }else if($op == "/"){
            $r = $v1 / $v2;
        }
        return view ('calculadora.create');
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
            $calculadora = new Calculadora();
            $dados = $request->only($calculadora->getFillable());
            Calculadora::create($dados);
            echo "Inserido com sucesso!";
            return redirect()->action([CalculadoraController::class, 'edit']);

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
        $calculadora = Calculadora::findOrFail($id);

        return view("calculadora.edit", compact("calculadora"));
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
            $calculadora = new Calculadora();
            $dados = $request->only($calculadora ->getFillable());
            $v1 = $_POST['v1'];
            $v2 = $_POST['v2'];
            $op = $_POST['op'];
            $r = $_POST['r'];
            if($op == "+"){
                $r = $v1 + $v2;
            }else if($op == "-"){
                $r = $v1 - $v2;
            }else if($op == "*"){
                $r = $v1 * $v2;
            }else if($op == "/"){
                $r = $v1 / $v2;
            }
            Calculadora::whereId($id)->update($dados);
            return redirect()->action([CalculadoraController::class, 'edit']);
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
            Calculadora::destroy($id);
            return redirect()->action([CalculadoraController::class, 'index']);
        }
        catch (\Exception $e){
            echo "Erro ao excluir"+$e->getMessage();
        }
    }

}
