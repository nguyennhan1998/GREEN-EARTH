<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";
    protected $fillable = [
        'title',
        'description',
        'content',
        'view_count',
        'category_id',
        'user_id'
    ];
    public function Category(){
        return $this->belongsTo("App\Category","category_id");
    }
    public function User(){
        return $this->belongsTo("App\User", "user_id");
    }
}
