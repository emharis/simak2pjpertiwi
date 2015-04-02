<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

//Route::get('/', 'WelcomeController@index');
//
//Route::get('home', 'HomeController@index');
//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);

Route::get('/', function() {
    return Redirect::to('login');
});

Route::get('login', function() {
    return view('login');
});

Route::post('auth', function() {
    //auth login
    //
    //open homepage
    return Redirect::to('home');
});

Route::controller('home','HomeController');
Route::controller('agenda','AgendaController');
//Route::controller('master/periode','\App\Http\Controllers\Master\PeriodeController');

Route::group(['prefix' => 'master'], function(){
   Route::controller('periode','\App\Http\Controllers\Master\PeriodeController');
   Route::controller('kabupaten','\App\Http\Controllers\Master\KabupatenController');
   Route::controller('kecamatan','\App\Http\Controllers\Master\KecamatanController');
   Route::controller('desa','\App\Http\Controllers\Master\DesaController');
   Route::controller('dusun','\App\Http\Controllers\Master\DusunController');
   Route::controller('sub','\App\Http\Controllers\Master\SubController');
   Route::controller('petani','\App\Http\Controllers\Master\PetaniController');
   Route::controller('lahan','\App\Http\Controllers\Master\LahanController');
   Route::controller('sopir','\App\Http\Controllers\Master\SopirController');
   Route::controller('varietas','\App\Http\Controllers\Master\VarietasController');
});
