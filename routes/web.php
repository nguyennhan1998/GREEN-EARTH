<?php

use Illuminate\Support\Facades\Route;
Auth::routes();
require_once "user.php";
Route::group(["middleware"=>["admin","auth"],"prefix"=>"admin"],function (){
    require_once "admin.php";
});

Route::get('/', 'WebController@Home')->name('home');

Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');

//facebook
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');
Route::get("/create-payment","PaymentController@create");
Route::get("/return-vnpay","PaymentController@return");

Route::get('/search', "FeatureAjaxController@getSearch");
Route::post('/search', "HomeController@postSearch");
