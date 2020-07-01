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

Route::get( '/{locale}', function ( $locale ) {
    if ( ! in_array( $locale, [ 'pl', 'en' ] ) ) {
        abort(400);
    }

    App::setLocale($locale);

    return view( 'welcome' );
} );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');