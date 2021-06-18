<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'SiteController@index')->name('index');
Route::get('/products/show/{slug}', 'SiteController@product')->name('product.show');
Route::get('/contact-us', 'SiteController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'SiteController@index')->name('shop');

Route::prefix('shop')->name('shop.')->group(function(){
	Route::get('/all', 'ShopController@index')->name('all');
});

Route::prefix('admin')->name('admin.')->group(function ()
{
	Route::prefix('/categories')->name('category.')->group(function ()
	{
		Route::get('/create', 'CategoryController@create')->name('create');
		Route::post('/create', 'CategoryController@save')->name('save');
		Route::get('/{slug}', 'CategoryController@show')->name('show');
		Route::post('/{slug}', 'CategoryController@update')->name('update');
		Route::post('/avatar/{category}', 'CategoryController@updateAvatar')->name('updateavatar');
		Route::get('/', 'CategoryController@index')->name('index');
	});

	Route::prefix('/products')->name('product.')->group(function ()
	{
		Route::get('/create', 'ProductController@create')->name('create');
		Route::post('/create', 'ProductController@store')->name('save');
		Route::get('/show/{slug}', 'ProductController@show')->name('show');
		Route::post('/show/{product}', 'ProductController@update')->name('update');
		Route::post('/delete/{product}', 'ProductController@destroy')->name('delete');
		Route::get('/', 'ProductController@index')->name('index');
	});
});


// Route::prefix('/admin')->name('admin.')->group(function ()
// {
// 	Route::get('/', 'AdminController@index')->name('index');
// });
