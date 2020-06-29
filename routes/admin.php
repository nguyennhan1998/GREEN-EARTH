<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get("/admin","AdminController@admin");
//Route event
Route::get("/new-event","AdminController@newEvent");
Route::get("/list-event","Admincontroller@listEvent");
Route::get("/edit-event","AdminController@editEvent");
Route::delete("/delete-event","AdminController@deleteEvent");
Route::put("/update-event","AdminController@updateEvent");
Route::post("/save-event","AdminController@saveEvent");






