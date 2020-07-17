<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";
    public $fillable=[
        "name",
        "image1",
        "image2",
        "image3",
        "image4",
        "qty",
        "price",
        "event_id",
    ];


    public function getImage(){
        if(is_null($this->__get("image1"))){
            return asset("images/image_defauld.png");
        }
        return asset($this->__get("image1"));
    }
}
