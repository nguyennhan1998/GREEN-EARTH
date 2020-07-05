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



Route::get('/home', 'WebController@Home')->name('home');

Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');
