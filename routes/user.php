<?php









use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get("/home","WebController@Home");
Route::get("/blog","WebController@Blog");
Route::get("/about","WebController@AboutUS");
Route::get("/event","WebController@Event");
Route::get("/event-detail","WebController@EventDetail");
Route::get("/projects","WebController@Projects");
Route::get("/projects-detail","WebController@ProjectsDetail");
Route::get("/contact","WebController@Contact");
