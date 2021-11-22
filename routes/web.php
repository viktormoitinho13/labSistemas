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

//Route::post('/getDetalhesProduto', [UserAuthController::class, 'getDetalhesProduto'])->name('get.DetalhesProduto');
Route::get('/getListaProdutos', [UserController::class, 'ListaProdutos'])->name('get.ListaProduto');

Route::middleware(['auth'])->group(function () {
    Route::post('/cadastrofuncionario', [AdminController::class, 'cadastrofuncionario']);
    Route::post('/cadastroproduto', [AdminController::class, 'cadastroproduto']);
    Route::post('/cadastroloja', [AdminController::class, 'cadastroloja']);
    Route::post('/cadastrofabricante', [AdminController::class, 'cadastrofabricante']);
    Route::post('/procura', [UserController::class, 'procura'])->name('procuraProdutos');
    //Route::delete('/deletaProduto', [AdminController::class, 'deleta'])->name('deletaProdutos');
    Route::get('/home', [AuthController::class, 'home']);
});
    


