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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home_path',
]);

//tours
Route::get('/peru-tours', [
    'uses' => 'HomeController@tours',
    'as' => 'tours_path',
]);

//paquetes
Route::get('/pacotes-de-viagem-peru', [
    'uses' => 'HomeController@paquetes',
    'as' => 'paquetes_path',
]);

//destinos
Route::get('/destinos-peru', [
    'uses' => 'HomeController@destinations',
    'as' => 'destinations_path',
]);

Route::get('/destinos-peru/{titulo}', [
    'uses' => 'HomeController@destinations_show',
    'as' => 'destinations_show_path',
]);

//detail program
Route::get('/pacotes-de-viagem-peru/{titulo}', [
    'uses' => 'HomeController@show',
    'as' => 'home_show_path',
]);

//detail program
Route::get('/pacotes-de-viagem-peru/{titulo}/sin-hotel', [
    'uses' => 'HomeController@sin_hotel',
    'as' => 'sin_hotel_show_path',
]);

//detail tours
Route::get('/peru-tours/{titulo}', [
    'uses' => 'HomeController@itinerario_tours',
    'as' => 'itinerario_tours_show_path',
]);
//nosotros
Route::get('/sobre-nos', [
    'uses' => 'HomeController@about',
    'as' => 'about_path',
]);

//social
Route::get('/responsabilidade-social', [
    'uses' => 'HomeController@social',
    'as' => 'social_path',
]);

//hoteles
Route::get('/hoteis-peru', [
    'uses' => 'HomeController@hoteles',
    'as' => 'hoteles_path',
]);
//dicas
Route::get('/dicas', [
    'uses' => 'HomeController@dicas',
    'as' => 'dicas_path',
]);
//traslados
Route::get('/traslados/{titulo}', [
    'uses' => 'HomeController@transfer',
    'as' => 'transfer_path',
]);

//form
Route::post('/design', [
    'uses' => 'HomeController@design',
    'as' => 'design_path',
]);

Route::post('/contact', [
    'uses' => 'HomeController@contact',
    'as' => 'contact_path',
]);

Route::post('/tel', [
    'uses' => 'HomeController@tel',
    'as' => 'tel_path',
]);

Route::post('/inquire', [
    'uses' => 'HomeController@inquire',
    'as' => 'inquire_path',
]);
Route::post('/design_inquire', [
    'uses' => 'HomeController@design_inquire',
    'as' => 'design_inquire_path',
]);