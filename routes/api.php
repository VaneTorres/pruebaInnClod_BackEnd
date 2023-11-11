<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware("auth")->group(function(){
    Route::get("documentos","App\Http\Controllers\DocumentosController@obtenerDocumentos");
    Route::get("documentos/{id}","App\Http\Controllers\DocumentosController@obtenerDocumento");
    Route::post("documentos","App\Http\Controllers\DocumentosController@crearDocumento");
    Route::put("documentos/{id}","App\Http\Controllers\DocumentosController@actualizarDocumento");
    Route::delete("documentos/{id}","App\Http\Controllers\DocumentosController@eliminarDocumento");
});
Route::post("login","App\Http\Controllers\LoginController@login");
Route::post("logout","App\Http\Controllers\LoginController@logout");

