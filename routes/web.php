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

Route::get('/login', [UserAuthController::class, 'login'])->name('login');
Route::post('/auth', [UserAuthController::class, 'auth'])->name('auth.user');
Route::get('/logout', [UserAuthController::class, 'logout'])->name('logout.user');
#Route::get('/home', [UserAuthController::class, 'home'])->middleware('auth.basic');
#Middleware bloqueando a rota mesmo autenticado // Descobrir a causa
Route::get('/home', [UserAuthController::class, 'home']);

Route::get('/procura', [UserAuthController::class, 'procura']);


Route::post('/cadastrofuncionario', [AdminController::class, 'cadastrofuncionario']);
Route::post('/cadastroproduto', [ProdutoController::class, 'cadastroproduto']);
Route::post('/cadastroloja', [LojaController::class, 'cadastroloja']);
Route::post('/cadastrofabricante', [FabricanteController::class, 'cadastrofabricante']);


