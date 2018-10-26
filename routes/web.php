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

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::namespace('Front')->name('front.')->group(function () {

Route::get('homeekoto', 'LandingPageController@index');


});

/*Route::namespace('Auth')->group(function (){

        
     //Routes for namespace Auth
    	});*/


Route::namespace('Root')->name('root.')->group(function () {

     
     //Routes for namespace Root
	
       // Route::middleware('auth')->group(function () {
        	//for guardweb user
		//});


        
        Route::get('/', 'DashboardController@index')->name('dashboard');

		Route::prefix('products')->name('products.')->group(function () {
		Route::get('index', 'ProductsController@index');
		Route::get('create','ProductsController@create');




		Route::POST('store', 'ProductsController@store')->name('store');

		});


		

		Route::prefix('user')->name('user.')->group(function () {
		 
		//for user
		});





});

