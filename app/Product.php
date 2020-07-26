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
    public function getProductUrl(){
        return url("/shop-detail/{$this->__get("slug")}");
    }
    public function getPrice(){
        return "$".number_format($this->__get("price"),2);
    }
    public function Category(){
        return $this->belongsTo("\App\Category","category_id");// tra ve 1 object
    }

    public function Brand(){
        return $this->belongsTo("\App\Brand");
    }

    public function toArray()
    {
        return  [
            "id"=>$this->__get("id"),
            "name"=>$this->__get("product_name"),
            "image"=> $this->getImage()
        ];
    }
}
