<?php

namespace App\Http\Controllers;

use App\Event;
use App\Image;
use App\Product;
use Illuminate\Http\Request;
use App\Cart;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;
use App\Events\OrderCreated;
use App\Order;

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
    public function AddToCart(Product $product,Request $request){
        $qty = $request->has("qty")&& (int)$request->get("qty")>0?(int)$request->get("qty"):1;
        $myCart = session()->has("my_cart")&& is_array(session("my_cart"))?session("my_cart"):[];
        $contain = false;
        if(Auth::check()){
            if(Cart::where("user_id",Auth::id())->where("is_checkout",true)->exists()){
                $cart = Cart::where("user_id",Auth::id())->where("is_checkout",true)->first();
            }else{

                $cart = Cart::create([
                    "product_id"=>$request->get("id"),
                    "user_id"=> Auth::id(),
                    "is_checkout"=>true
                ]);

            }
        }
        foreach ($myCart as $key=>$item){
            if($item["product_id"] == $product->__get("id")){
                $myCart[$key]["qty"] += $qty;
                $contain = true;
                if(Auth::check()) {
                    DB::table("cart_product")->where("cart_id", $cart->__get("id"))
                        ->where("product_id", $item["product_id"])
                        ->update(["qty" => $myCart[$key]["qty"]]);
                }
                break;
            }
        }
        if(!$contain){
            $myCart[] = [
                "product_id" => $product->__get("id"),
                "qty" => $qty
            ];
            if(Auth::check()) {
                DB::table("cart_product")->insert([
                    "qty" => $qty,
                    "cart_id" => $cart->__get("id"),
                    "product_id" => $product->__get("id")
                ]);
            }
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
        $cart = Cart::where("user_id",Auth::id())
            ->where("is_checkout","=",true)
            ->with("getItems")
            ->firstOrFail();
        return view("frontend.checkout",[
            "cart"=>$cart
        ]);
    }

    public function placeOrder(Request $request){
        $request->validate([
            "username"=>"required",
            "address"=>"required",
            "telephone"=>"required",
        ]);
        $cart = Cart::where("user_id",Auth::id())
            ->where("is_checkout",true)
            ->with("getItems")
            ->firstOrFail();
        $grandTotal = 0;
        foreach ($cart->getItems as $item){
            $grandTotal+= $item->pivot->__get("qty")*$item->__get("price");
        }
        try{
            $order = Order::create([
                "user_id"=>Auth::id(),
                "username"=>$request->get("username"),
                "address"=>$request->get("address"),
                "telephone"=>$request->get("telephone"),
                "note"=>$request->get("note"),
                "grand_total"=>$grandTotal,
                "status"=> Order::PENDING
            ]);
            foreach ($cart->getItems as $item){
                DB::table("orders_products")->insert([
                    "order_id"=>$order->__get("id"),
                    "product_id"=>$item->__get("id"),
                    "price" => $item->__get("price"),
                    "qty"=> $item->pivot->__get("qty")
                ]);
            }
            event(new OrderCreated($order));

        }catch (\Exception $exception){

        }
        return redirect()->to("/");
    }
    public function donate(){
        return view("frontend.donate");
    }



















































    public function Image(){
        $image = Image::all();
        return view("frontend.image", [
            "image" => $image
        ]);
    }
}