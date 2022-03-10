<?php

use Illuminate\Support\Facades\Route;


Route::namespace('App\Http\Controllers\Site')->group(function() {
    Route::get('/', 'HomeController')->name('site.home');

    Route::get('produtos', 'CategoryController@index')->name('site.product');
    Route::get('produtos/{slug}', 'CategoryController@show');

    Route::get('blog', 'BlogController')->name('site.blog');

    Route::view('sobre', 'site.about.index')->name('site.about');

    Route::get('contato', 'ContactController@index')->name('contact.index');
    Route::post('contato', 'ContactController@contact')->name('contact.form');
});
