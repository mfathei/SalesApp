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

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});


// lang

Route::get('language/{lang}', array(
    'before' => 'csrf',
    'as'     => 'language-switcher',
    'uses'   => 'LanguageController@chooser'
));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/invoices', 'InvoicesController@dashboard');

// customers
Route::get('/customers', 'CustomerController@index');
Route::get('/customers/delete/{id}', 'CustomerController@destroy');
Route::get('/customers/edit/{id}', 'CustomerController@edit');
Route::post('/customers/update/{id}', 'CustomerController@update');
