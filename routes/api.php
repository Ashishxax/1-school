<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->group(function () {
    // our routes to be protected will go in here
    Route::post('/logout', 'Auth\ApiAuthController@logout')->name('logout.api');
    Route::match(['get', 'post'],'/schedule','Student\IndexController@schedule')->name('schedule.api');
    Route::match(['get', 'post'],'/detail','Student\IndexController@detail')->name('detail.api');
});

Route::group(['middleware' => ['cors', 'json.response']], function () {
   // public routes
   Route::post('/login', 'Auth\ApiAuthController@login')->name('login.api');
   Route::post('/register','Auth\ApiAuthController@register')->name('register.api');
});
