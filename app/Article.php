<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";
    protected $fillable = [
        'title',
        'image',
        'description',
        'content',
        'view_count',
        'category_id',
        'user_id'
    ];
    public function getImage(){
        if(is_null($this->__get("image"))){
            return asset("images/image_defauld.png");
        }
        return asset($this->__get("image"));
    }
    public function Category(){
        return $this->belongsTo("App\Category","category_id");
    }
    public function User(){
        return $this->belongsTo("App\User", "user_id");
    }
    public function getArticleUrl(){
        return url("/shop-detail/{$this->__get("slug")}");
    }
}
