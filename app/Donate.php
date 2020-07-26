<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $table="donates";
    protected $fillable=[
        "title",
        "image",
        "description",
        "content",
        "start_at",
        "end_at",
        "view_count",
        "raiser_money",
        "target_money",
        "organization_id",
        "user_id"
    ];
    public function getImage(){
        if(is_null($this->__get("image"))){
            return asset("images/image_defauld.png");
        }
        return asset($this->__get("image"));
    }
    public function Organize(){
        return $this->belongsTo("\App\Organize","organization_id");
    }
    public function User(){
        return $this->belongsTo("App\User", "user_id");
    }
}
