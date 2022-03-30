<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CarrinhoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
# Após feito a criação da Model e controller, a rota será feita dessa forma abaixo, evitando rotas manuais para cada comando.
Route::resources([
    'categoria' => CategoriaController::class
]);
Route::resources([
    'fornecedor' => FornecedorController::class
]);
Route::resources([
    'produto' => ProdutoController::class
]);
Route::resources([
    'funcionario' => FuncionarioController::class
]);
Route::resources([
    'carrinho' => CarrinhoController::class
]);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
