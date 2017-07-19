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

Route::get('/', 'HomeController@index');


/*Route::get('/service', 'HomeController@index');
*/
Route::get('/alias', function(){
  return App\RBTAlias::skip(2)->take(10)->get();
});


Route::get('/landingpage1', 'HomeController@landingpage1');

Route::get('/landingpage2', 'HomeController@landingpage2');

Route::get('/landingpage3', 'HomeController@landingpage3');

Route::get('/landingpage4', 'HomeController@landingpage4');

Route::get('/landingpage5', 'HomeController@landingpage5');

Route::get('/landingpage6', 'HomeController@landingpage6');

Route::post('/verification', 'HomeController@verification');

Route::post('/confirmverification', 'HomeController@confirmverification');
