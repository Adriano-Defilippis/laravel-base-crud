<?php


Route::get('/', 'BookController@index');
Route::get('/books/create', 'BookController@create')->name('book.create');
Route::post('/books/store', 'BookController@store')->name('book.store');
