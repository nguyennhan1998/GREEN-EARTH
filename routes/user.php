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
Route::get("/addtocart","WebController@AddToCart");
Route::get("/image","WebController@Image");
Route::get("/shopping-cart","WebController@shoppingCart");
Route::get("/donate","WebController@donate");
Route::get("/donate","WebController@donate");
Route::post("/cart/add/{product}","WebController@addToCart");
Route::get("/checkout","WebController@checkout")->middleware("auth");
Route::post("/placeorder","WebController@placeOrder")->middleware("auth");





