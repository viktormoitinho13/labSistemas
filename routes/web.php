<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


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

Route::get('/', [AuthController::class, 'loginForm'])->name('loginForm');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/getDetalhesProduto', [UserController::class, 'getDetalhesProduto'])->name('get.DetalhesProduto');
Route::get('/getListaProdutos', [UserController::class, 'ListaProdutos'])->name('get.ListaProduto');
Route::get('/getListaLojas', [UserController::class, 'getListaLoja']);

Route::middleware(['auth'])->group(function () {
    Route::post('/cadastrofuncionario', [AdminController::class, 'cadastrofuncionario']);
    Route::post('/cadastroproduto', [AdminController::class, 'cadastroproduto']);
    Route::post('/cadastroloja', [AdminController::class, 'cadastroloja']);
    Route::post('/cadastrofabricante', [AdminController::class, 'cadastrofabricante']);
    Route::post('/procuraProduto', [UserController::class, 'procuraProduto'])->name('procuraProdutos');
    Route::post('/updateProduto', [AdminController::class, 'atualizaProduto']);
    Route::delete('/deletaProduto', [AdminController::class, 'deletaProduto'])->name('deletaProdutos');
    Route::get('/home', [AuthController::class, 'home']);
});
    


