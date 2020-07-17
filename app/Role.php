<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table="roles";
    public $timestamps = false;
    protected $fillable=[
        "name"
    ];
    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
