<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function Home()
    {
        return view("frontend.home");
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
        return view("frontend.event");

    }

    public function EventDetail()
    {
        return view("frontend.event-detail");
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
