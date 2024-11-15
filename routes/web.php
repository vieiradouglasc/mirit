<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Clientes
Route::get('clientes', [ClienteController::class, 'index'])->name('cliente.index');
Route::post('clientes/criar', [ClienteController::class, 'criarCliente'])->name('cliente.criar.post');
Route::get('clientes/{cliente}/atualizar', [ClienteController::class, 'formularioAtualizarCliente'])->name('cliente.atualizar.get');
Route::post('clientes/{cliente}/atualizar', [ClienteController::class, 'atualizarCliente'])->name('cliente.atualizar.post');
Route::delete('clientes/{clienteid}', [ClienteController::class, 'deletarCliente'])->name('cliente.deletar');

//Produtos
Route::get('produtos', [ProdutoController::class, 'index'])->name('produto.index');
Route::post('produtos/criar', [ProdutoController::class, 'criarProduto'])->name('produto.criar.post');
Route::get('produtos/{produto}/atualizar', [ProdutoController::class, 'formularioAtualizarProduto'])->name('produto.atualizar.get');
Route::post('produtos/{produto}/atualizar', [ProdutoController::class, 'atualizarProduto'])->name('produto.atualizar.post');
Route::delete('produtos/{produtoid}', [ProdutoController::class, 'deletarProduto'])->name('produto.deletar');