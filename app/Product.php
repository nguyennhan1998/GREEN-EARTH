<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";
    public $fillable=[
        "name",
        "price",
        "event_id",
    ];
}
