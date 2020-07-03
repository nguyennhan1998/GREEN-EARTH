<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get("/admin","AdminController@admin");





//Route categories
Route::get("/new-category","CategoryController@newCategory");
Route::get("/list-category","CategoryController@listCategory");
Route::get("/edit-category/{id}","CategoryController@editCategory");
Route::delete("/delete-category/{id}","CategoryController@deleteCategory");
Route::put("/update-category/{id}","CategoryController@updateCategory");
Route::post("/save-category","CategoryController@saveCategory");


// Router events
Route::get("/new-event","EventController@newEvent");
Route::get("/list-event","EventController@listEvent");
Route::get("/edit-event/{id}","EventController@editEvent");
Route::delete("/delete-event/{id}","EventController@deleteEvent");
Route::put("/update-event/{id}","EventController@updateEvent");
Route::post("/save-event","EventController@saveEvent");



//Route Organize
Route::get("/new-organize","OrganizeController@newOrganize");
Route::get("/list-organize","OrganizeController@listOrganize");
Route::get("/edit-organize/{id}","OrganizeController@editOrganize");
Route::post("/save-organize","OrganizeController@saveOrganize");
Route::put("/update-organize/{id}","OrganizeController@updateOrganize");
Route::delete("/delete-organize/{id}","OrganizeController@deleteOrganize");
Route::get('/test', function () {
    return view('test');
});
