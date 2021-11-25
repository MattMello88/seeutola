<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BuscaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdutoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('user')->group(function () {
  Route::post('/register', [UserController::class, 'store'])->name('admin.store');
  Route::post('/login', [UserController::class, 'login'])->name('admin.login');
  Route::post('/logout', [UserController::class, 'logout'])->name('admin.logout');    
});

Route::prefix('admin')->group(function () {
  Route::post('/reset-password', [AdminController::class, 'login'])->name('admin.login');
  Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
  Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');    
});

Route::middleware('auth:sanctum')->group(function () {
  Route::get('/checkLogin', function (Request $request) {
    return ['Authorization' => 'true'];
  });
});

Route::middleware('auth:sanctum')->group(function () {
  Route::resource('produto', ProdutoController::class)->names('produto');
});


Route::resource('config', ConfigController::class)->names('config');
Route::resource('agenda', AgendaController::class)->names('agenda');

Route::get('/busca', [BuscaController::class, 'index']);
