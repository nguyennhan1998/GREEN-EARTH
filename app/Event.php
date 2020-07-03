<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $table="events";
  protected $fillable=[
      "title",
      "description",
      "content",
      "start_at",
      "end_at",
      "total_money",
      "organization_id"


//
    ];
}
