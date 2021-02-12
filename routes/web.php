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
    $data = file_get_contents('../resources/data.json');
    $dataEncoded = json_decode($data, true );
    $dataFinal = [];
    foreach ($dataEncoded['data'] as $data) {
      if (!array_key_exists($data['tipo'],$dataFinal)) {
        $dataFinal[$data['tipo']] = [];
        array_push($dataFinal[$data['tipo']], $data);
      } else {
        array_push($dataFinal[$data['tipo']], $data);
      }
    }
    $dataEncoded = $dataFinal;
    return view('prodotti', compact('dataEncoded'));
})-> name('prodotti');


Route::get('/contatti', function () {
    return view('contatti');
})-> name('contatti');
