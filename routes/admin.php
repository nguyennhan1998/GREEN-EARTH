<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get("/admin","AdminController@admin");
//Route event
Route::get("/new-event","AdminController@newEvent");
Route::get("/list-event","Admincontroller@listEvent");
Route::get("/edit-event/{id}","AdminController@editEvent");
Route::delete("/delete-event/{id}","AdminController@deleteEvent");
Route::put("/update-event/{id}","AdminController@updateEvent");
Route::post("/save-event","AdminController@saveEvent");






//Route categories
Route::get("/new-category","CategoryController@newCategory");
Route::get("/list-category","CategoryController@listCategory");
Route::get("/edit-category/{id}","CategoryController@editCategory");
Route::delete("/delete-category/{id}","CategoryController@deleteCategory");
Route::put("/update-category/{id}","CategoryController@updateCategory");
Route::post("/save-category","CategoryController@saveCategory");







//Route Organize
Route::get("/new-organize","OrganizeController@newOrganize");
Route::get("/list-organize","OrganizeController@listOrganize");
Route::get("/edit-organize/{id}","OrganizeController@editOrganize");
Route::post("/save-organize","OrganizeController@saveOrganize");
Route::put("/update-organize/{id}","OrganizeController@updateOrganize");
Route::delete("/delete-organize/{id}","OrganizeController@deleteOrganize");
