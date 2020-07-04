<?php

namespace App\Http\Controllers;

use App\Article;
use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function listImage(){
        $images=Image::all();
        return view("admin.image.list",[
            "images"=>$images,
        ]);
    }
    public function newImage(){
        $articles=Article::all();
        return view("admin.image.new",[
            "articles"=>$articles,
        ]);
    }
    public function saveImage(Request $request){
        $request->validate([
            "name"=>"required",
            "article_id"=>"required",
        ]);
        try {
            Image::create([
                "name"=>$request->get("name"),
                "article_id"=>$request->get("article_id"),
            ]);

        }catch (\Exception $exception){
            return $exception->getMessage();
        }
        return redirect()->to("/admin/list-image");
    }

    public function editImage($id){
        $image = Image::findOrFail($id);
        $articles=Article::all();
        return view("admin.image.edit",[
            "image"=>$image,
            "articles"=>$articles,
        ]);
    }

    public function updateImage($id,Request $request){
        $image = Image::findOrFail($id);
        $request->validate([
            "name"=>"required",
            "article_id"=>"required",
        ]);
        try {
            $image->update([
                "name"=>$request->get("name"),
                "article_id"=>$request->get("article_id"),
            ]);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/admin/list-image");
    }

    public function deleteImage($id){
        $image= Image::findOrFail($id);
        try {
            $image->delete();
        }catch (\Exception $exception){

        }
        return redirect()->to("admin/list-image");
    }

}
