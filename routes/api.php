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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([

    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'alumnos'

], function ($router) {

    Route::post('/', 'Sisa_AlumnosController@store')->name('alumnos.store');
    Route::get('/', 'Sisa_AlumnosController@index')->name('alumnos.index');
    Route::get('/{id}', 'Sisa_AlumnosController@show')->name('alumnos.show');
    Route::put('/{id}', 'Sisa_AlumnosController@update')->name('alumnos.update');
    Route::delete('/{id}', 'Sisa_AlumnosController@update')->name('alumnos.destroy');
    
});