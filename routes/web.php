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
    return view('home');
})-> name('home');


Route::get('/prodotti', function () {
  include 'partials/db_convert.php';

    return view('prodotti', compact('dataEncoded'));
})-> name('prodotti');


Route::get('/contatti', function () {
    return view('contatti');
})-> name('contatti');

Route::get('/prodotti/{key1}/{key2}', function ($key1,$key2) {
  include 'partials/db_convert.php';
  $prodotto = $dataEncoded[$key1][$key2];
  return view('prodotto',compact('prodotto'));
});
