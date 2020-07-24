<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get("/dashboard", "AdminController@admin");

//Route categories
Route::get("/new-category", "CategoryController@newCategory");
Route::get("/list-category", "CategoryController@listCategory");
Route::get("/edit-category/{id}", "CategoryController@editCategory");
Route::delete("/delete-category/{id}", "CategoryController@deleteCategory");
Route::put("/update-category/{id}", "CategoryController@updateCategory");
Route::post("/save-category", "CategoryController@saveCategory");

// Router events
Route::prefix('events')->group(function () {
    Route::get("/list", "EventController@index");
    Route::get("/new", "EventController@new");
//    Route::get("/list","EventController@list");
    Route::post("/save", "EventController@save");
    Route::get("/edit/{id}", "EventController@edit");
    Route::put("/update/{id}", "EventController@update");
    Route::delete("/delete/{id}", "EventController@delete");
});

//Route image

Route::get("/new-image", "ImageController@newImage");
Route::get("/list-image", "ImageController@listImage");
Route::get("/edit-image/{id}", "ImageController@editImage");
Route::delete("/delete-image/{id}", "ImageController@deleteImage");
Route::put("/update-image/{id}", "ImageController@updateImage");
Route::post("/save-image", "ImageController@saveImage");

//Route Organize
Route::get("/new-organize", "OrganizeController@newOrganize");
Route::get("/list-organize", "OrganizeController@listOrganize");
Route::get("/edit-organize/{id}", "OrganizeController@editOrganize");
Route::post("/save-organize", "OrganizeController@saveOrganize");
Route::put("/update-organize/{id}", "OrganizeController@updateOrganize");
Route::delete("/delete-organize/{id}", "OrganizeController@deleteOrganize");

//Route product
Route::get("/new-product", "ProductController@newProduct");
Route::get("/list-product", "ProductController@listProduct");
Route::get("/edit-product/{id}", "ProductController@editProduct");
Route::post("/save-product", "ProductController@saveProduct");
Route::put("/update-product/{id}", "ProductController@updateProduct");
Route::delete("/delete-product/{id}", "ProductController@deleteProduct");

//Route article
Route::prefix('articles')->group(function () {
    Route::get("/new", "ArticleController@newArticle");
    Route::get("/list", "ArticleController@listArticle");
    Route::get("/edit/{id}", "ArticleController@editArticle");
    Route::post("/save", "ArticleController@saveArticle");
    Route::put("/update/{id}", "ArticleController@updateArticle");
    Route::delete("/delete/{id}", "ArticleController@deleteArticle");
});


//Route user
Route::prefix('users')->group(function () {
    Route::get("/new", "UserController@newUser");
    Route::get("/list", "UserController@listUser");
    Route::get("/edit/{id}", "UserController@editUser");
    Route::post("/save", "UserController@saveUser");
    Route::put("/update/{id}", "UserController@updateUser");
    Route::delete("/delete/{id}", "UserController@deleteUser");
    Route::delete("/delete/{id}", "UserController@downPermisson");
});

