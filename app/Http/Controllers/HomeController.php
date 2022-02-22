<?php
// made in terminal with commands "php artisan make:controller HomeController
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // In /routes/web.php add /index
    public function index(){
        return view("welcome");
    }

}
