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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/', function () {
    if (Auth::check()) {
        return view('admin');
    }
    return redirect('/login');
});

Route::get('/users', 'UsersController@index');

Route::post('/users', 'UsersController@create');

Route::view('/test', 'test');

//Route::view('/create','create');

//Route::view('/client/create', 'create');

//RUTAS CLIENTE

Route::resource('/clientes', 'ClientController')->middleware('auth');

