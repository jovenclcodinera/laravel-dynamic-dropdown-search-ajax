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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/myform', "MainController@myform")->name("myform");
Route::get('myform/ajax/{id}', "MainController@myformAjax")->name("myform.ajax");

Route::get('/', "MainController@index")->name("main.index");
Route::get("/states", "MainController@getStates")->name("main.getStates");
Route::get("/getData/{id}", "MainController@getData")->name("main.getData");
