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
    $saluti = 'Helloooooooo World';
    $speranza = 'Sembra che funzioni tutto!';

    $puntiChiave = config('puntichiave');

    return view('home', compact('saluti', 'speranza', 'puntiChiave'));
});
