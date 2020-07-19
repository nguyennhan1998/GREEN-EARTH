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

    public function product(Product $product){
        if(!session()->has("view_count_{$product->__get("id")}")){
            $product->increment("view_count");
            session(["view_count_{$product->__get("id")}"=> true]);
        }
        return view("frontend.product",[
            'product'=> $product
        ]);
    }
    public function addToCart(Product $product,Request $request){
        $qty = $request->has("qty")&& (int)$request->get("qty")>0?(int)$request->get("qty"):1;
        $myCart = session()->has("my_cart")&& is_array(session("my_cart"))?session("my_cart"):[];
        $contain = false;
        foreach ($myCart as $item){
            if($item["product_id"] == $product->__get("id")){
                $item["qty"]+= $qty;
                $contain = true;
                break;
            }
        }
        if(!$contain){
            $myCart[] = [
                "product_id" => $product->__get("id"),
                "qty" => $qty
            ];
        }
        session(["my_cart"=>$myCart]);
        return redirect()->to("/shopping-cart");
    }
    public function shoppingCart(){
        $myCart = session()->has("my_cart") && is_array(session("my_cart"))?session("my_cart"):[];
        $productIds = [];
        foreach ($myCart as $item){
            $productIds[] = $item["product_id"];
        }
        $grandTotal = 0;
        $products = Product::find($productIds);
        foreach ($products as $p){
            foreach ($myCart as $item){
                if($p->__get("id") == $item["product_id"]){
                    $grandTotal += ($p->__get("price")*$item["qty"]);
                    $p->cart_qty = $item["qty"];
                }
            }
        }
        return view("frontend.cart",[
            "products"=>$products,
            "grandTotal" => $grandTotal
        ]);
    }
    public function checkout(){
        return view("frontend.checkout");
    }



















































    public function Image(){
        $image = Image::all();
        return view("frontend.image", [
            "image" => $image
        ]);
    }
}
