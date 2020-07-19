<?php

namespace App\Http\Controllers;

use App\Event;
use App\Image;
use App\Product;
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

    public function Shop(){
        $product = Product::all();
        return view("frontend.shop",[
            "product" => $product
        ]);
    }

    public function ShopDetail($id){
        $product = Product::findOrFail($id);
        return view("frontend.shop-detail",[
            "product"=>$product
        ]);
    }

    public function AddToCart(){

    }























































    public function Image(){
        $image = Image::all();
        return view("frontend.image", [
            "image" => $image
        ]);
    }

}
