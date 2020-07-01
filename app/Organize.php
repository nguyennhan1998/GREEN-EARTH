<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organize extends Model
{
    protected $table = "organizations";
    public $fillable = [
        "name",
        "email",
        "phone",
        "address",
        "client_id",
        "secret",
        "team_size",
    ];
}
