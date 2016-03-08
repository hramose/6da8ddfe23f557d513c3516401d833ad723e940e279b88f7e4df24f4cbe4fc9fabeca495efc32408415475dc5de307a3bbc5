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

<<<<<<< HEAD
//Route::get('/', 'RolController@getIndex');
=======
Route::get('welcome', function () {
    return view('welcome');
});

//streaming
Route::get('streaming', function () {
    return view('pnlcntrlstreaming');
});
//login
Route::get('/mylogin', function () {
    return view('login');
});

//loginojos
Route::get('/ojoslogin', function () {
    return view('ojoslogin');
});
Route::get('/registrar', function () {
    return view('formregistrar');
});

//panel de contrrol sorganizacion
Route::get('/oftalmorojas', function () {
    return view('oftalmorojas');
});

//panel de control principal
Route::get('/controlprincipal', function () {
    return view('controlpanel/pc_prncpl');
});
Route::get('/buscapaciente', function () {
    return view('controlpanel/Paciente/pc_bscrpcnt');
});
Route::get('/telechat', function () {
    return view('controlpanel/pc_tlcht');
});


//ppanel control chat con medico
Route::get('/telehatmedico', function () {
    return view('controlpanel/pc_tlchtcnmdc');
});
Route::get('/cplogin', function () {
    return view('controlpanel/pc_lgn');
});


//panel de control historia clinica
Route::get('/historiaclinica', function () {
    return view('controlpanel/HistoriasClinicas/pc_R_hstrclnc');
});
Route::get('/nuevahistoriaclinica', function () {
    return view('controlpanel/HistoriasClinicas/pc_CR_hstrclnc');
});


//ppanel control biblioteca medica
Route::get('/biblioteca', function () {
    return view('controlpanel/BibliotecaMedica/pc_bbltcmdc');
});




//old dentro de old
Route::get('/myhome', function () {
    return view('old/home');
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

>>>>>>> origin/master

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
    Route::controller('rols', 'RolController');
    Route::controller('permits', 'PermitController');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
