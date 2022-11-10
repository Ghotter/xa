<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CadastrarController;
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

Route::get('/',[HomeController::class,'MostrarLivros'])->name('home');
Route::get('/cadastrar',[CadastrarController::class,'MostrarCadastro'])->name('mostrar-cadastro');
Route::post('/cadastrar',[CadastrarController::class,'cadastrar'])->name('cadastrar');
Route::get('/home',[HomeController::class,'MostrarLivros'])->name('MostrarLivros');