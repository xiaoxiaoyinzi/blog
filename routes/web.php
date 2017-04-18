<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
    Route::get('/test', function () {
        return view('test');
});
Route::get('/hello', function () {
    return 'hello';
});
Route::any('admin/login','Admin\LoginController@login' );
Route::get('admin/code','Admin\LoginController@code' );
//Route::get('admin/getcode','Admin\LoginController@getcode' );
Route::group(['middleware' => ['web','admin.login'],'prefix' => 'admin','namespace'=>'Admin'], function () {
    Route::get('index','IndexController@index');
    Route::get('info','IndexController@info');
    Route::get('element','IndexController@element');
    Route::get('quit','loginController@quit');
    Route::any('pass','IndexController@pass');
    Route::post('real/changeorder','RealController@changeorder');
    Route::resource('real', 'RealController');
//    Route::get('map','IndexController@map');
    Route::get('map/{id}/view','MapController@index');
    Route::get('map/view','MapController@view');
});


//Route::auth()其实是调用Illuminate/Routing/Router类的auth方法.
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::any('/test/file', 'FileController@upload');




