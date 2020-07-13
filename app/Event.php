<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table="events";
    protected $fillable=[
        "title",
        "image",
        "description",
        "content",
        "start_at",
        "end_at",
        "total_money",
        "organization_id",
        "user_id"
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function getImage(){
        if(is_null($this->__get("image"))){
            return asset("images/image_defauld.png");
        }
        return asset($this->__get("image"));
    }

}
