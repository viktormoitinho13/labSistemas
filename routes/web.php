<?php

use App\Http\Controllers\UserAuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::post("user", [UserAuthController::class, 'userLogin']);
Route::view("home", 'home');

Route::get('/login', function()
{
    if(session()->has('username'))
    {
        return redirect('home');
    }
    return view('login');
});

Route::get('/logout', function()
{
    if(session()->has('username'))
    {
        session()->pull('username');
    }
    return redirect('login');
});
