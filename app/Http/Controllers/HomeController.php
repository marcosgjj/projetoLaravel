<?php

// made in terminal with commands "php artisan make:controller HomeController

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // In /routes/web.php add /index
    public function index()
    {


        $produtos = Produto::all();

        return view("welcome", compact("produtos"));
    }
    public function detalhe($id)
    {
        $produto = Produto::findOrfail($id);
        return view("produto", compact('produto'));
    }

}
