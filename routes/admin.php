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






//Route categories
Route::get("/new-category","CategoryController@newCategory");
Route::get("/list-category","CategoryController@listCategory");
Route::get("/edit-category","CategoryController@editCategory");
Route::delete("/delete-category","CategoryController@deleteCategory");
Route::put("/update-category","CategoryController@updateCategory");
Route::post("/save-category","CategoryController@saveCategory");
