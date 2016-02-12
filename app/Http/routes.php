<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//rutas dinamicas
Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloworld',function(){
    return 'Hello World!';
});

Route::get('hello', function () {
    return view('hello', ['name' => 'Daigo']);
});



Route::get('/principal',function(){
    return 'Bienvenido!';
});

Route::get('paginaprincipal', function () {
    return view('paginaprincipal', ['name' => 'Junior']);//retorna la vista vienvenido
});



//rutas para controladores
Route::get('hello/{name?}', function ($name = null) {
    return view('hello', ['name' => $name]);
});
Route::get('helloCon', 'Hello@index');

Route::get('/helloCon/{name}', 'Hello@show');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
