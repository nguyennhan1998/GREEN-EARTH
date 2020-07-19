<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Article;
use App\Category;
use App\Event;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function listArticle()
    {
        $this->authorize("list", Article::class);
        $articles =Article::paginate(20);
        return view("admin.article.list", [
            "articles" => $articles
        ]);

    }

    public function newArticle()
    {
        $this->authorize("new" , Article::class);

        $categories = Category::all();
        $events = Event::all();
        return view("admin.article.new",
            [
                "categories"=>$categories,
                "events"=>$events,
            ]);
    }

    public function saveArticle(Request $request){
        $this->authorize("save" , Article::class);

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
                "user_id" => Auth::id()
            ]);

        }catch (\Exception $exception){
           return $exception->getMessage();
        }
//        dd($article);
       return redirect()->to("/admin/articles/list");
    }

    public function editArticle($id){

        $article = Article::findOrFail($id);
        $this->authorize('edit',$article, Article::class);
        $categories =Category::all();
        $events = Event::all();
        return view("admin.article.edit",[
            "article" => $article,
            "categories"=>$categories,
            "events"=>$events
        ]);
    }

    public function updateArticle($id,Request $request){
        $article = Article::findOrFail($id);
        $this->authorize("update",$article, Article::class);
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
        return redirect()->to("/admin/articles/list");
    }

    public function deleteArticle($id){
        $article = Article::findOrFail($id);
        $this->authorize("delete",$article, Article::class);
        try {
            $article->delete();
        }catch (\Exception $exception){

        }
        return redirect()->to("admin/articles/list");
    }
}
