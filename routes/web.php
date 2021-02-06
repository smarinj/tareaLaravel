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

Route::get('/', 'Tarea\TareaController@index');

Route::get('/form', 'Tarea\TareaController@frmContacto');

Route::post('/contactos', 'Tarea\TareaController@Rcontacto');

Route::get('/lista', 'Tarea\TareaController@tblContactos')->name('lista');

Route::get('/editcontacto/{id}', 'Tarea\TareaController@frmEditContacto')
    ->where(['id' => '[0-9]+']);

Route::put('/contactos', 'Tarea\TareaController@actualizar');

Route::get('/eliminarcontacto/{id}', 'Tarea\TareaController@eliminar')
    ->where(['id' => '[0-9]+']);
