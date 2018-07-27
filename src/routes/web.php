<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Illuminate\Http\Request;

Route::group(['namespace' => 'Multidots\Contact\Http\Controllers'], function() {
    Route::get('/contact', 'ContactController@contactForm')->name('contact-form');
    Route::post('/contact', 'ContactController@saveQuery')->name('contact');
});

