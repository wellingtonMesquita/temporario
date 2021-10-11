<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::resource('anuncios', 'AnuncioController');
    Route::resource('publicacao', 'PublicacaoController');
});
Route::get('publicacao/{publicacao}', 'PublicacaoController@show')->name('perfil');
Route::get('/', 'WelcomeController@index')->name('welcome');


Route::get('/home', 'HomeController@index')->name('home');



