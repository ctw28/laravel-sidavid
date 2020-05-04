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


// route::get('/', function(){
//     return view('home');
// });

route::get('/', 'PageController@index')->name('home');
route::get('/data-orang', 'PeoplesController@index')->name('people/data');
route::get('/data-orang/tambah-data', 'PeoplesController@create')->name('people/tambah');


route::get('/berita', 'BeritaController@index')->name('berita');
route::get('/about', 'BeritaController@index')->name('about');


route::post('/people', 'PeoplesController@store')->name('people');