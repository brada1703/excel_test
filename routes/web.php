<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('customers', 'CustomerController@index')->name('customers.index');
Route::get('customers/export', 'CustomerController@export')->name('customers.export');
Route::get('customers/export_view', 'CustomerController@export_view')->name('customers.export_view');
Route::get('customers/export_sheets', 'CustomerController@export_sheets')->name('customers.export_sheets');

Route::get('customers/export_format/{format}', 'CustomerController@export_format')->name('customers.export_format');

Route::post('customers/import', 'CustomerController@import')->name('customers.import');
