<?php

use Illuminate\Support\Facades\Route;
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
require_once "user.php";
Route::group(["middleware"=>["admin","auth"],"prefix"=>"admin"],function (){
    require_once "admin.php";
});



Route::get('/home', 'HomeController@index')->name('home');

Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');
