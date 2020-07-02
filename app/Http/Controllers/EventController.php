<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function listEvent()
    {
        $categories =Event::paginate(20);
        return view("admin.event.list", [
            "categories" => $categories
        ]);

    }

    public function newEvent()
    {
        return view("admin.event.new");
    }
}
