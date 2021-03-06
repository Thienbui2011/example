<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/example', function () {
    return view('index');
});
Route::group(['prefix'=>'example', 'as'=>'example.'], function(){
    Route::get('index', 'App\Http\Controllers\ExampleController@index')->name('index');
    Route::get('create', 'App\Http\Controllers\ExampleController@create')->name('create');
    Route::post('store', 'App\Http\Controllers\ExampleController@store')->name('store');
    Route::get('edit/{id}', 'App\Http\Controllers\ExampleController@edit')->name('edit');
    Route::put('update/{id}', 'App\Http\Controllers\ExampleController@update')->name('update');
    Route::delete('destroy/{id}', 'App\Http\Controllers\ExampleController@destroy')->name('destroy');
});

Route::group(['prefix'=>'auth', 'as'=>'auth.'], function(){
    Route::get('/login', 'App\Http\Controllers\Admin\LoginController@login')->name('login');
    Route::post('/post/login', 'App\Http\Controllers\Admin\LoginController@postLogin')->name('post_login');
});

//Admin
Route::group(['middleware' => 'auth.login', 'prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::get('/home', function(){
        return view('admin.page.home.index');
    });
});

//Login
// Route::get('/login', function(){
//     return view('admin.page.auth.login');
// });