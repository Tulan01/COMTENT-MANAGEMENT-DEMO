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

Route::get('/', function () {
    return view('layout.frontpages.master');
}); 

Route::get('adminhome','ContentManageController@home')->name('home');
Route::get('addinfo','ContentManageController@addinfo')->name('addinfo');
Route::post('save','ContentManageController@save')->name('save');

Route::get('viewsingle{id}','NewurlController@viewsingle')->name('viewsingle');
Route::get('/','NewurlController@homeview')->name('homeview');






Route::post('saveon','NewurlController@saveon')->name('saveon');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
