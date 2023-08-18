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
    //return view('welcome');
    return "vista de Bienvenida";
});

Route::get('/usuarios/{id}/{nombre?}', function($idusuario,$nombreusuario=null){
    if($nombreusuario){
        return "Hola Usuario" .$nombreusuario ."tu id es" .$idusuario;
    }
    else{
        return "Hola tu id es:" .$idusuario;
    }
});