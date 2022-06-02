<?php

// made in terminal with commands "php artisan make:controller HomeController

namespace App\Http\Controllers;

use App\Models\Produto;

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
        $produto = Produto::findOrFail($id);
        return view("produto", compact('produto'));
    }

}
