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

Route::resource('url', 'UrlController');


//Trying The API
//
//    method = 'POST';
//    api: 'urlshortener.test/api/url';
//
//    Parameters::
//
//    name = 'url';
//    value = 'site to shorten';