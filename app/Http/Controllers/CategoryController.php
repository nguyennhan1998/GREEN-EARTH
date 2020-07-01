<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function listCategory()
    {
        $categories =Category::paginate(20);
        return view("admin.category.list", [
            "categories" => $categories
        ]);

    }

    public function newCategory()
    {
        return view("admin.category.new");
    }
    public function saveCategory(Request $request){
        $request->validate([
            "title"=> "required|string|min:2|unique:categories",
            "url"=> "required"
        ]);
        try{
            Category::create([
                "title"=> $request->get("title"),
                "url"=> $request->get("url")
            ]);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/list-category");
    }

    public function editCategory($id){
        $category = Category::findOrFail($id);
        return view("admin.category.edit",
            ["category"=>$category]);
    }

    public function updateCategory($id,Request $request){
        $category = Category::findOrFail($id);
        $request->validate([
            "title"=> "required|min:2|unique:categories,title,{$id}",
            "url"=>"required"
        ]);
        try {
            $category->update([
                "title"=> $request->get("title"),
                "url"=> $request->get("url")
            ]);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("list-category");
    }

    public function deleteCategory($id){
        $category = Category::findOrFail($id);
        try{
            $category->delete();
        }catch (\Exception $exception){
        }
        return redirect()->to("list-category");
    }
}
