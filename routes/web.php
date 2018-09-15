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

Route::get('/test', function() {
  return view('testpage');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['web','auth']],function(){
  Route::get('/',function(){
    return view('welcome');
  });

  Route::get('/home',function(){
    if(Auth::user()->admin == 0){
      //return view('seller_panel');
      return redirect('Panels/Seller_Panel/index.html');
    }else{
      $user['users'] = \App\User::all();
     // return view('Admin Panel',$users);
      return redirect('Panels/Admin Panel/index.html');
    }
  });
});


//Route::get('/home', function() {
 // return redirect('Panels/Seller_Panel/index.html');
//});
