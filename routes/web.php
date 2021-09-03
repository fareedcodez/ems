<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\GroupUse;

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

Route::get('/','PagesController@index');
Route:: get('/about', 'PagesController@about')->name('about');
Route::get('/services', 'PagesController@services')->name('services');
Route::get('/show','PagesController@show')->name('show');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['verify' => true]);

Route::middleware('auth')->group(function ()
{
    Route::resource('posts','PostsController');
    Route::resource('events', 'EventsController');
});

Route::view('/bulksms', 'bulksms');
Route::post('/bulksms', 'BulkSmsController@sendSms');



Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users','UsersController',['except'=>['show','create','store']]);
});

//Route::group(['prefix'=>'user', 'middleware'=>['role:user|attendee']], function(){
    //Route::resource('/events','EventsController',['except'=>['index','create','store','update','destroy']])->name('events.show');
//});
