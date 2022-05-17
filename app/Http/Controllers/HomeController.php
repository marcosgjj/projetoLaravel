<?php

// made in terminal with commands "php artisan make:controller HomeController

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // In /routes/web.php add /index
    public function index()
    {
        Gate::authorize("acesso-administrador");
        return view("welcome");
    }
    public function primeiroExercicio()
    {
        return view("exercicio1");
    }

}
