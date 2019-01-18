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
    return view('myUsers');
});

Route::get('my-home', 'HomeController@myHome');

Route::get('my-users', 'HomeController@myUsers');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// ===============================================
    // STATIC PAGES ==================================
    // ===============================================

    // about page (app/views/about.blade.php)
    Route::get('about', function()
    {
        return View::make('about');
    });

    Route::get('customers', function()
    {
        return View::make('customers');
    });
    Route::get('payments', function()
    {
        return View::make('payments');
    });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
