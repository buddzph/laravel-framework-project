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

Route::get('/landingpage7', 'HomeController@landingpage7');

Route::get('/landingpage8', 'HomeController@landingpage8');

Route::get('/landingpage9', 'HomeController@landingpage9');

Route::get('/landingpage10', 'HomeController@landingpage10');

Route::get('/landingpage11', 'HomeController@landingpage11');

Route::get('/landingpage12', 'HomeController@landingpage12');

Route::get('/landingpage13', 'HomeController@landingpage13');

Route::get('/landingpage14', 'HomeController@landingpage14');

Route::get('/landingpage15', 'HomeController@landingpage15');

Route::post('/verification', 'HomeController@verification');

Route::post('/confirmverification', 'HomeController@confirmverification');
