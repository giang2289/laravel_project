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

	//Controller Admin Category
Route::group(['namespace'=>'Admin','prefix'=>'Admin'],function(){
	
	// Route resource Admin Product
	Route::get('/','CategoriesController@index')->name('indexCate');
	Route::get('/addCate','CategoriesController@create')->name('addcate');
	
	
	Route::get('/listcate','CategoriesController@cate')->name('adminlistCate');
	
	
});
//Test Admin controller Product

Route::group(['namespace'=>'Admin','prefix'=>'AdminProd'],function(){
	// Route resource Admin Product
	Route::resource('/', 'ProductController@index');
	Route::resource('/', 'ProductController')->names([
		'create' =>'addproduct'
	]);
	
	Route::get('/listproduct','ProductController@product')->name('adminlistProduct');
	
	
});

View::share('Ten','giang');
