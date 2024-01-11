<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return 'login usuario';
});

Route::get('logout', function () {
    return 'logout usuario';
});

Route::get('catalog', function () {
    return 'listado de peliculas';
});

Route::get('catalog/show/{id}', function ($id) {
    return 'vista detalle película '. $id;
});

Route::get('catalog/create', function () {
    return 'añadir película';
});

Route::get('catalog/edit/{id}', function ($id) {
    return 'modificar película ' . $id;
});

Route::get('catalog/edit/{id}', function ($id) {
    return 'modificar película ' . $id;
});

Route::get('tabla/{id?}', function ($id=2) {
    for ($i=0; $i <= 10; $i++) { 
        echo $id . " x " . $i . " = " . $id*$i . "<br>";
    }
})->where("id","[0-9]+");