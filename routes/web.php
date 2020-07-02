<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
require_once "user.php";
require_once "admin.php";

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');