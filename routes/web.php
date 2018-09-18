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

// Route to show all the products
Route::get('/products', 'ProductController@index');

// Route to initial form
Route::get('/products/create-step1', 'ProductController@createStep1');

// Route to get initial form data
Route::post('/products/create-step1', 'ProductController@postCreateStep1');

// Route to second form
Route::get('/products/create-step1-2', 'ProductController@createStep12');

// Route to get second form data
Route::post('/products/create-step1-2', 'ProductController@postCreateStep12');

// Route to third form
Route::get('/products/create-step2', 'ProductController@createStep2');

// Route to get third form data
Route::post('/products/create-step2', 'ProductController@postCreateStep2');


Route::post('/products/remove-image', 'ProductController@removeImage');

Route::get('/products/create-step3', 'ProductController@createStep3');
Route::post('/products/store', 'ProductController@store');

Route::get('/home', function() {
  return redirect('Panels/Seller_Panel/index.html');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function() {
  return view('testpage');
});
