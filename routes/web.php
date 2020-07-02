<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware;
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

Route::get('/1', function () {
    return view('welcome');
});
Route::get('/aa', function () {
    return view('Admin/login');
});
Route::get('/', function () {
    return view('index');
});
// //Test
// Route::get('/test',function(){
// 	'uses'=> 'Admin\TestController@index',

// });

//Test Admin controller
Route::group(['prefix' =>'admin'],function(){
	Route::get('/test/12',[
		'uses'=> 'Admin\TestController@index'
	]);
});
Route::group(['namespace'=>'Admin','prefix'=>'admin'],function(){
	Route::get('/product',[
		'uses' => 'ProductController@index'
	]);
});

Route::namespace(['namespace'=>'Admin',],function(){
	Route::get('/ad/product',[
		'uses' => 'ProductController@index',
	]);
});
