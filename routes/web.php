<?php

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

Route::prefix('admin')->group(function () {
    Route::get('/login', function () {
        return view('admin/login');
    });

    Route::get('/dashboard', function () {
        return view('admin/dashboard');
    });

    Route::get('/cadastro/produto', function () {
        return view('admin/produto');
    });

    Route::get('/cadastro/agenda', function () {
        return view('admin/agenda');
    });

    Route::get('/configuracao/pagina', function () {
        return view('admin/pagina');
    });
});

Route::prefix('user')->group(function () {
    Route::get('/login', function () {
        return view('user/login');
    });

    Route::get('/register', function () {
        return view('user/register');
    });

    Route::get('/forgot', function () {
        return view('user/forgot');
    });

    Route::get('/recovery/{id}', function ($id) {
        return view('user/recovery',['id' => $id]);
    });

    Route::get('/dashboard', function () {
        return view('dashboard/main');
    });
});