<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    public $fillable = [
        "title",
        "url",
    ];
    public function Article(){
        return $this->hasMany("\App\Article");
    }
}
