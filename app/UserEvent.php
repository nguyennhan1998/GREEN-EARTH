<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEvent extends Model
{
    protected $table="user_events";
    protected $fillable=[
        'user_id',
        'event_id',
        'money_supporting',
    ];
    public function Event(){
        return $this->belongsTo("events","event_id");
    }
    public function User(){
        return $this->belongsTo("users","user_id");
    }
}
