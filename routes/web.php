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

Route::view('/', 'welcome')->name('welcome');
Route::view('about', 'about')->name('about');
Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');
Route::get('/club', function () {
    return 'welcome to the club';
})->middleware('age:Ali');

Route::resource('companies', 'CompanyController')->only(['index', 'show']);

Route::resource('customers', 'CustomerController');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('home/edit', 'Auth\UpdateController@edit')->name('edit');
Route::post('home', 'Auth\UpdateController@update')->name('update');

Route::get('logout', function () {
    abort(404);
});
