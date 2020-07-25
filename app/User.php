<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\HasPermissions;

class User extends Authenticatable
{
    use Notifiable, HasPermissions;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="users";
    protected $fillable = [
        'name', 'email', 'password', 'provider', 'provider_id','google_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
//    public function roles(){
//        return $this->hasManyThrough(Role::class,UserRole::class);
//    }
public function roles(){
return $this->belongsToMany(Role::class);
}
public function UserEvent(){
    return $this->belongsTo("UserEvent");
}
}
