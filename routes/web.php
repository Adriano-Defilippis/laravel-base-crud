<?php


Route::get('/', 'BookController@index');
Route::get('/books/create', 'BookController@create')->name('book.create');
Route::post('/books/store', 'BookController@store')->name('book.store');
Route::get('/books/{id}/edit', 'BookController@edit')->name('book.edit');
Route::post('/{id}', 'BookController@update')->name('book.update');
Route::get('/{id}/delete', 'BookController@destroy')->name('book.destroy');
