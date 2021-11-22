<?php

use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\FabricanteController;


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

Route::get('/', [UserAuthController::class, 'loginForm'])->name('loginForm');
Route::post('/login', [UserAuthController::class, 'login'])->name('login');
Route::post('/logout', [UserAuthController::class, 'logout'])->name('logout');

//Route::post('/getDetalhesProduto', [UserAuthController::class, 'getDetalhesProduto'])->name('get.DetalhesProduto');
Route::get('/getListaProdutos', [UserAuthController::class, 'ListaProdutos'])->name('get.ListaProduto');

Route::middleware(['auth'])->group(function () {
    Route::post('/cadastrofuncionario', [AdminController::class, 'cadastrofuncionario']);
    Route::post('/cadastroproduto', [ProdutoController::class, 'cadastroproduto']);
    Route::post('/cadastroloja', [LojaController::class, 'cadastroloja']);
    Route::post('/cadastrofabricante', [FabricanteController::class, 'cadastrofabricante']);
    Route::post('/procura', [UserAuthController::class, 'procura'])->name('procuraProdutos');
    Route::delete('/deletaProduto', [UserAuthController::class, 'deleta'])->name('deletaProdutos');
    Route::get('/home', [UserAuthController::class, 'home']);
});
    


