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


//Route image


Route::get("/new-image","ImageController@newImage");
Route::get("/list-image","ImageController@listImage");
Route::get("/edit-image/{id}","ImageController@editImage");
Route::delete("/delete-image/{id}","ImageController@deleteImage");
Route::put("/update-image/{id}","ImageController@updateImage");
Route::post("/save-image","ImageController@saveImage");




//Route Organize
Route::get("/new-organize","OrganizeController@newOrganize");
Route::get("/list-organize","OrganizeController@listOrganize");
Route::get("/edit-organize/{id}","OrganizeController@editOrganize");
Route::post("/save-organize","OrganizeController@saveOrganize");
Route::put("/update-organize/{id}","OrganizeController@updateOrganize");
Route::delete("/delete-organize/{id}","OrganizeController@deleteOrganize");



//Route product
Route::get("/new-product","ProductController@newProduct");
Route::get("/list-product","ProductController@listProduct");
Route::get("/edit-product/{id}","ProductController@editProduct");
Route::post("/save-product","ProductController@saveProduct");
Route::put("/update-product/{id}","ProductController@updateProduct");
Route::delete("/delete-product/{id}","ProductController@deleteProduct");



//Route article
Route::get("/new-article","ArticleController@newArticle");
Route::get("/list-article","ArticleController@listArticle");
Route::get("/edit-article/{id}","ArticleController@editArticle");
Route::post("/save-article","ArticleController@saveArticle");
Route::put("/update-article/{id}","ArticleController@updateArticle");
Route::delete("/delete-article/{id}","ArticleController@deleteArticle");


//Route user
Route::get("/new-user","UserController@newUser");
Route::get("/list-user","UserController@listUser");
Route::get("/edit-user/{id}","UserController@editUser");
Route::post("/save-user","UserController@saveUser");
Route::put("/update-user/{id}","UserController@updateUser");
Route::delete("/delete-user/{id}","UserController@deleteUser");

