<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table="images";
    protected $fillable=[
        "name",
        "article_id",
    ];

    public function getImage(){
        if(is_null($this->__get("name"))){
            return asset("images/image_defauld.png");
        }
        return asset($this->__get("name"));
    }
}
