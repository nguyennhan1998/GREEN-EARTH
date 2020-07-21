<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get("/home","WebController@Home");
Route::get("/blog","WebController@Blog");
Route::get("/about","WebController@AboutUS");
Route::get("/event","WebController@Event");
Route::get("/event-detail/{id}","WebController@EventDetail");
Route::get("/projects","WebController@Projects");
Route::get("/projects-detail","WebController@ProjectsDetail");
Route::get("/contact","WebController@Contact");
Route::get("/shop","WebController@Shop");
Route::get("/shop-detail/{id}","WebController@ShopDetail");
Route::post("/cart/add/{product}","WebController@AddToCart");
Route::get("/image","WebController@Image");
Route::get("/shopping-cart","WebController@shoppingCart");
Route::get("/donate","WebController@donate");
Route::get("/checkout","WebController@checkout");
Route::post("/checkout","WebController@placeOrder");