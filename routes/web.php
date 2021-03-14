<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/user',['as'=>'user.all', 'uses'=>'User\UserController@showusers']);

// Route::get('/', function () {
//     return view('restricted.dashboard');
// });

Auth::routes();

Route::get('/',                                 ['as'=>'login.home',            'uses'=>'HomeController@index']);

Route::get('/login'    ,                        ['as'=>'login',                 'uses'=>'AuthController@showLoginForm']);
Route::get('/logout'   ,                        ['as'=>'login.logout',          'uses'=>'AuthController@logout']);
Route::post('/login/do',                        ['as'=>'login.do',              'uses'=>'AuthController@login']);

Route::group(['middleware'=>'auth'],function(){
  Route::get('/dashboard',                      ['as'=>'dashboard',             'uses'=>'AuthController@dashboard']);

  Route::middleware('web','Check')->group(function () {
    Route::get('/users',                        ['as'=>'users.index',           'uses'=>'UserController@index']);
    Route::get('/users/create',                 ['as'=>'users.create',          'uses'=>'UserController@create']);
    Route::post('/users',                       ['as'=>'users.store',           'uses'=>'UserController@store']);
    Route::get('/users/{id}/edit',              ['as'=>'users.show',            'uses'=>'UserController@show']);
    Route::put('/users/{id}',                   ['as'=>'users.edit',            'uses'=>'UserController@update']);
    Route::delete('/users/{id}',                ['as'=>'users.destroy',         'uses'=>'UserController@destroy']);
  });

  Route::get('clients',                         ['as'=>'clients.index',         'uses'=>'Client/ClientController@index']);
  Route::get('clients/create',                  ['as'=>'clients.create',        'uses'=>'Client/ClientController@create']);
  Route::post('clients',                        ['as'=>'clients.store',         'uses'=>'Client/ClientController@store']);
  Route::get('clients/{id}/edit',               ['as'=>'clients.show',          'uses'=>'Client/ClientController@show']);
  Route::put('clients/{id}',                    ['as'=>'clients.edit',          'uses'=>'Client/ClientController@update']);
  Route::delete('clients/{id}',                 ['as'=>'clients.destroy',       'uses'=>'Client/ClientController@destroy']);
  Route::get('clients/{id}/data',               ['as'=>'clients.data',          'uses'=>'Client/ClientController@showData']);

  Route::get('contracts',                       ['as'=>'contracts',             'uses'=>'Client/ContractController@index']);
  Route::get('contracts/create',                ['as'=>'contracts.create',      'uses'=>'Client/ContractController@create']);
  Route::post('contracts',                      ['as'=>'contracts.store',       'uses'=>'Client/ContractController@store']);
  Route::get('contracts/{id}/edit',             ['as'=>'contracts.show',        'uses'=>'Client/ContractController@show']);
  Route::put('contracts/{id}',                  ['as'=>'contracts.edit',        'uses'=>'Client/ContractController@update']);
  Route::delete('contracts/{id}',               ['as'=>'contracts.destroy',     'uses'=>'Client/ContractController@destroy']);
  Route::get('contracts/export',                ['as'=>'contracts.export',      'uses'=>'Client/ContractController@export']);
  Route::put('contracts/{id}/edit/status',      ['as'=>'contracts.edit.status', 'uses'=>'Client/ContractController@updateStatus']);

  // Route::('',['as'=>'', 'uses'=>'@']);
});
