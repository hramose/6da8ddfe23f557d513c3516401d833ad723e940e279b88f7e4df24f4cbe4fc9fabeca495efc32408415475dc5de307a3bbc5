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
//----------
//principal
Route::get('/', function () {
    return view('welcome');
});

//streaming
Route::get('/streaming', function () {
    return view('streaming');
});
//login
Route::get('/login', function () {
    return view('login');
});

//loginojos en construccion
Route::get('/ojoslogin', function () {
    return view('ojoslogin');
});

//infomacion oftalmorojas en construccion
//redirige al portal de la compañia
Route::get('/oftalmorojas', function () {
    return view('oftalmorojas');
});

//login telemedicina
Route::get('/loginTelemedicina', function () {
    return view('loginTelemedicina');
});

//telechat
Route::get('/telechat', function () {
    return view('telechat');
});

//login telechat
Route::get('/logintelechat', function () {
    return view('logintelechat');
});


//Telemedicina panel de control paciente
Route::get('/tlmdpcpaciente', function () {
    return view('tlmdpcpaciente');
});

//Telemedicina panel de control medico
Route::get('/tlmdpcmedico', function () {
    return view('tlmdpcmedico');
});


//Telemedicina panel de control organizacion
Route::get('/tlmdpcorganizacion', function () {
    return view('tlmdpcorganizacion');
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
