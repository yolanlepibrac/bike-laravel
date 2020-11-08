<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/hello', function () {
    return "hello world";
});

Route::get('article/{n}', function($n) {
    return 'Je suis la page ' . $n . ' !';
})->where('n', '[1-3]');

Route::get('test', function () {
    return response('un test', 200)->header('Content-Type', 'text/plain');
});

Route::get('users/all', function () {
    return DB::table('users')->get();
});

Route::get('users', [UserController::class, 'index']);

Route::get('user/{id}', [UserController::class, 'getUserById']);