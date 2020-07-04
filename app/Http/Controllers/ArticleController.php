<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Event;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function listArticle()
    {
        $articles =Article::paginate(20);
        return view("admin.article.list", [
            "articles" => $articles
        ]);

    }

    public function newArticle()
    {
        $categories = Category::all();
        $events = Event::all();
        return view("admin.article.new",
            [
                "categories"=>$categories,
                "events"=>$events
            ]);
    }

    public function saveArticle(Request $request){
        $request->validate([
            "title"=>"required",
            "description"=>"required",
            "content"=>"required",
            "category_id"=>"required",
            "event_id"=>"required",

        ]);
        try {
            Article::create([
                "title"=>$request->get("title"),
                "description"=>$request->get("description"),
                "content"=>$request->get("content"),
                "category_id"=>$request->get("category_id"),
                "event_id"=>$request->get("event_id"),

            ]);

        }catch (\Exception $exception){
//            return $exception->getMessage();
        }
//        dd($article);
       return redirect()->to("/admin/list-article");
    }

    public function editArticle($id){
        $article = Article::findOrFail($id);
        $categories =Category::all();
        $event = Event::all();
        return view("admin.article.edit",[
            "article" => $article,
            "categories"=>$categories,
            "event"=>$event
        ]);
    }

    public function updateArticle($id,Request $request){
        $article = Article::findOrFail($id);
        $request->validate([
            "title"=>"required",
            "description"=>"required",
            "content"=>"required",
            "category_id"=>"required",
            "event_id"=>"required",
        ]);
        try {
            $article->update([
                "title"=>$request->get("title"),
                "description"=>$request->get("description"),
                "content"=>$request->get("content"),
                "category_id"=>$request->get("category_id"),
                "event_id"=>$request->get("event_id"),
            ]);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/admin/list-article");
    }

    public function deleteArticle($id){
        $article = Article::findOrFail($id);
        try {
            $article->delete();
        }catch (\Exception $exception){

        }
        return redirect()->to("admin/list-article");
    }
}
