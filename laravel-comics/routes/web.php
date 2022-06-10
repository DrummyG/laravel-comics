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
    $comics = config('comics');
    $menu = config('menu');
    return view('welcome', ['comics' => $comics], ['menu' => $menu]);
})->name('home');

Route::get('/super', function () {
    $comics = config('comics');
    $menu = config('menu');
    return view('super', ['comics' => $comics], ['menu' => $menu]);
})->name('super');
