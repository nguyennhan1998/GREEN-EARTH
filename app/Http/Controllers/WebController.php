<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function Home()
    {
        $events = Event::all();
        return view('frontend.event',[
            'events'=>$events,
        ]);
    }

    public function Blog()
    {
        return view("frontend.blog");
    }

    public function AboutUs()
    {
        return view("frontend.about");
    }

    public function Event()
    {
        $events = Event::all();
        return view('frontend.event',[
            'events'=>$events,
        ]);

    }

    public function EventDetail($id)
    {
        $event = Event::findOrFail($id);
        return view("frontend.event-detail",[
            'event'=>$event,
        ]);
    }

    public function Projects()
    {
        return view("frontend.projects");
    }

    public function ProjectsDetail()
    {
        return view("frontend.projects-detail");
    }

    public function Contact()
    {
        return view("frontend.contact");
    }
}
