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

//Route::group([
//    'namespace' => 'Message',
//    'prefix'    => 'message',
//    'as'        => 'message.',
//],function(){
//    Route::get('',              'ListController@index') ->name('list');
//    Route::post('',             'CreateController@create') ->name('new:action');
//});

Route::get('list/{id}',function(){
    return view('page.index');
});
Route::post('list/{id}','ListController@new');
Route::get('reg',function(){
    return view('page.reg');
});
Route::post('reg','RegController@reg');
Route::get('sign_in',function(){
    return view('page.login');
})                                      ->name('login');
Route::post('sign_in','SignController@sign');
