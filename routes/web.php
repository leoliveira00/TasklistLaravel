<?php

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

Route::get('/template', function () {
    return view('template.app');
});

Route::group(["prefix" => "tasklist"], function(){
    Route::get("/", "TasksController@index");
    Route::get("/novo", "TasksController@novoView");
    Route::get("/{id}/editar", "TasksController@editarView");
    Route::get("/{id}/excluir", "TasksController@excluirView");
    Route::post("/store", "TasksController@store");
    Route::post("/update", "TasksController@update");
    Route::post("/delete", "TasksController@delete");
});
