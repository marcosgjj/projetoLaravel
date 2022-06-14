<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Compra;
use App\Models\CompraProduto;
use App\Models\Fornecedor;
use App\Models\Produto;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        Gate::authorize('acesso-administrador');
        return view('dashboard');
    }
    public function data()
    {

    }
}
