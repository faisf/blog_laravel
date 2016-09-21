<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('artikel','ArtikelController@index');
Route::get('artikel/add','ArtikelController@add');
Route::post('artikel/save','ArtikelController@save');
Route::get('artikel/edit/{id}','ArtikelController@edit');
Route::post('artikel/update','ArtikelController@update');
Route::get('artikel/delete/{id}','ArtikelController@delete');
Route::get('siswa','KomentarController@index');
Route::get('about', function()
{
  return view('about');
});
