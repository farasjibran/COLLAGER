<?php

// use Symfony\Component\Routing\Annotation\Route;
use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    function () {
        return view('home');
    }
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashbord', 'Dashbord@index')->name('dashbord');
Route::get('/kampus', 'KampusController@index')->name('kampus');
Route::get('/kepribadian', 'KepribadianControlller@index')->name('kepribadian');
Route::get('/minat', 'MinatController@index')->name('minat');
Route::get('/kemampuan', 'kemampuanController@index')->name('kemampuan');
Route::get('/hasil', 'KemampuanController@hasil')->name('hasil');
