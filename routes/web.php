<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiteController;

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

Route::get('/',[HomeController::class, 'index']);


Route::prefix('painel')->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login-action');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register-action');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');


    // ROTAS PARA A PÁGINA DO SITE
    Route::get('/site', [SiteController::class, 'index'])->name('site');
    Route::put('/site/editar-banner/{id}', [SiteController::class, 'editBanner'])->name('editar-banner');
    Route::post('/site/servico/add',[SiteController::class, 'addServico'])->name('cadastrar-servico');
    Route::post('/site/items/add', [SiteController::class, 'addItens'])->name('cadastrar-itens');
    Route::delete('/site/servicos/delete', [SiteController::class, 'deleteServico'])->name('delete-servico');
});
