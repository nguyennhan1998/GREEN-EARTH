<?php

namespace App;
use Carbon\Carbon;
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
        "view_count",
        "raiser_money",
        "target_money",
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
    public function Organize(){
        return $this->belongsTo("\App\Organize","organization_id");
    }
    public function UserEvent(){
        return $this->belongsTo("\App\UserEvent");
    }
    public function Article(){
        return $this->hasMany("\App\Article");
    }
    public function getEventUrl(){
        return url("/event-detail/{$this->__get("slug")}");
    }


}
