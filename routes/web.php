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
    return view('mywelcome');
});
Route::get('/motivation', function () {
    return view('motivation');
});
Route::get('/faq', function () {
    return view('faq');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/{id}', [App\Http\Controllers\HomeController::class, 'edit']);
Route::post('/agenda', [App\Http\Controllers\AgendaController::class, 'create'])->name('agenda');
Route::delete('/agenda/{id}', [App\Http\Controllers\AgendaController::class, 'destroy']);
Route::put('/agenda/{id}', [App\Http\Controllers\AgendaController::class, 'update']);
