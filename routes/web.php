<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/','ShortLinkController@index');
Route::get('/faq',function()
   {
       return view('frontend.partials.faq');
   });

Auth::routes();

Route::get('generate-shorten-link', 'ShortLinkController@index')->name('generate.shorten.link');

Route::post('shorten-link/store', 'ShortLinkController@store')
    ->name('generate.shorten.link.post')
    ->middleware('throttle:10,1'); // Rate limit: 10 requests per minute

Route::get('/home', 'HomeController@index')->name('home');

// This must be LAST - catch-all route for short links
Route::get('/{code}', 'ShortLinkController@shortenLink')
    ->name('shorten.link')
    ->where('code', '[A-Za-z0-9]{6}'); // Only 6 character alphanumeric codes
