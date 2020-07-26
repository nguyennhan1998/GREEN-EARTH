<?php

namespace App\Http\Controllers;

use App\Article;
use App\Donate;
use App\Event;
use App\User;
use App\Image;
use App\Product;
use App\UserEvent;
use Illuminate\Http\Request;
use App\Cart;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;
use App\Events\OrderCreated;
use Illuminate\Support\Facades\Mail;
use App\Order;

class WebController extends Controller
{
    public function test(){
        return view("mail.checkout-form");
    }
    public function Home()
    {

        $articles =Article::with("User")->paginate(3);
        $events = Event::with("Organize")->paginate(3);
        $donates=Donate::with("Organize")->paginate(4);
        $products=Product::all();
        foreach ($products as $p) {
            $slug = \Illuminate\Support\Str::slug($p->__get("product_name"));
            $p->slug = $slug = $slug . $p->__get("id");
            $p->save();
            //$p->update(["slug"=>$slug.$p->__get("id");
        }
        foreach ($articles as $p) {
            $slug = \Illuminate\Support\Str::slug($p->__get("title"));
            $p->slug = $slug = $slug . $p->__get("id");
            $p->save();
            //$p->update(["slug"=>$slug.$p->__get("id");
        }
        foreach ($events as $p) {
            $slug = \Illuminate\Support\Str::slug($p->__get("title"));
            $p->slug = $slug = $slug . $p->__get("id");
            $p->save();
            //$p->update(["slug"=>$slug.$p->__get("id");
        }
        foreach ($donates as $p) {
            $slug = \Illuminate\Support\Str::slug($p->__get("title"));
            $p->slug = $slug = $slug . $p->__get("id");
            $p->save();
            //$p->update(["slug"=>$slug.$p->__get("id");
        }
        return view("frontend.home", [
            "articles" => $articles,
            "events"=>$events,
            "donates"=>$donates,
            "products"=>$products,
        ]);
    }
    public function Blog()
    {
       $articles =Article::with("User")->get();
        return view("frontend.blog",
        ["articles"=>$articles]);
    }
    public function blogDetail(Article $article){
        return view("frontend.blog-detail", [
            'article' => $article,
        ]);

    }
    public function AboutUs()
    {
        return view("frontend.about");
    }
    public function Event()
    {
        $events = Event::with("Organize")->paginate(20);
        return view('frontend.event', [
            'events' => $events,
        ]);

    }
    public function EventDetail(Event $event)
    {
//        $event = Event::with("Organize")->findOrFail($events);
        return view("frontend.event-detail", [
            'event' => $event,
        ]);
    }
    public function donate(Request $request)
    {
        $mydonate = UserEvent::with("User")->with("Event")->get();
        $mydonate2=UserDonate::with("User")->with("Donate")->get();
//        $request->validate([
//            "username"=>'required',
//            "address"=>"required",
//            "email"=>"required",
//            "phone"=>"required",
//
//        ]);
        $event = Event::where("user_id", Auth::id())->get();
        $donate=Donate::where("user_id",Auth::id()->get());
//        try{
//            $userevent=UserEvent::create([

//                "user_id"=>Auth::id(),
//                "event_id"=>$request->$mydonate->get("event_id"),
//                "money_supporting"=>$request->get("money_supporting"),
//            ]);
//        }catch (\Exception $exception){
//            return redirect()->to("/");
//        }

        return view("frontend.donate",
            [
                "mydonate" => $mydonate,
                "mydonate2"=>$mydonate2,
            ]);
    }
    public function donatePage(Request $request){
        $donates=Donate::with("User")->paginate(8);
        return view("frontend.donate-page",[
            "donates"=>$donates,
        ]);
    }
    public function donateDetail(Donate $donate)
    {
//        $event = Event::with("Organize")->findOrFail($events);
        return view("frontend.donate-detail", [
            'donate' => $donate,
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
    public function Shop()
    {
        $product = Product::all();
        return view("frontend.shop", [
            "product" => $product
        ]);
    }
    public function ShopDetail(Product $product)
    {
        return view("frontend.shop-detail", [
            "product" => $product
        ]);
    }
    public function product(Product $product)
    {
        if (!session()->has("view_count_{$product->__get("id")}")) {
            $product->increment("view_count");
            session(["view_count_{$product->__get("id")}" => true]);
        }
        return view("frontend.product", [
            'product' => $product
        ]);
    }
    public function AddToCart(Product $product, Request $request)
    {
        $qty = $request->has("qty") && (int)$request->get("qty") > 0 ? (int)$request->get("qty") : 1;
        $myCart = session()->has("my_cart") && is_array(session("my_cart")) ? session("my_cart") : [];
        $contain = false;
        if (Auth::check()) {
            if (Cart::where("user_id", Auth::id())->where("is_checkout", true)->exists()) {
                $cart = Cart::where("user_id", Auth::id())->where("is_checkout", true)->first();
            } else {

                $cart = Cart::create([
                    "product_id" => $request->get("id"),
                    "user_id" => Auth::id(),
                    "is_checkout" => true
                ]);

            }
        }
        foreach ($myCart as $key => $item) {
            if ($item["product_id"] == $product->__get("id")) {
                $myCart[$key]["qty"] += $qty;
                $contain = true;
                if (Auth::check()) {
                    DB::table("cart_product")->where("cart_id", $cart->__get("id"))
                        ->where("product_id", $item["product_id"])
                        ->update(["qty" => $myCart[$key]["qty"]]);
                }
                break;
            }
        }
        if (!$contain) {
            $myCart[] = [
                "product_id" => $product->__get("id"),
                "qty" => $qty
            ];
            if (Auth::check()) {
                DB::table("cart_product")->insert([
                    "qty" => $qty,
                    "cart_id" => $cart->__get("id"),
                    "product_id" => $product->__get("id")
                ]);
            }
        }
        session(["my_cart" => $myCart]);
        return redirect()->to("/shopping-cart");
    }
    public function shoppingCart()
    {
        $myCart = session()->has("my_cart") && is_array(session("my_cart")) ? session("my_cart") : [];
        $productIds = [];
        foreach ($myCart as $item) {
            $productIds[] = $item["product_id"];
        }
        $grandTotal = 0;
        $products = Product::find($productIds);
        foreach ($products as $p) {
            foreach ($myCart as $item) {
                if ($p->__get("id") == $item["product_id"]) {
                    $grandTotal += ($p->__get("price") * $item["qty"]);
                    $p->cart_qty = $item["qty"];
                }
            }
        }
        return view("frontend.cart", [
            "products" => $products,
            "grandTotal" => $grandTotal
        ]);
    }
    public function checkout()
    {
        $cart = Cart::where("user_id", Auth::id())
            ->where("is_checkout", "=", true)
            ->with("getItems")
            ->firstOrFail();
        return view("frontend.checkout", [
            "cart" => $cart
        ]);
    }
    public function placeOrder(Request $request)
    {
        $request->validate([
            "username" => "required",
            "address" => "required",
            "telephone" => "required",
        ]);
        $cart = Cart::where("user_id", Auth::id())
            ->where("is_checkout", true)
            ->with("getItems")
            ->firstOrFail();

        $grandTotal = 0;
        foreach ($cart->getItems as $item) {
            $grandTotal += $item->pivot->__get("qty") * $item->__get("price");
        }
        try {
            $order = Order::create([
                "user_id" => Auth::id(),
                "username" => $request->get("username"),
                "address" => $request->get("address"),
                "telephone" => $request->get("telephone"),
                "note" => $request->get("note"),
                "grand_total" => $grandTotal,
                "status" => Order::PENDING
            ]);
            foreach ($cart->getItems as $item) {
                DB::table("orders_products")->insert([
                    "order_id" => $order->__get("id"),
                    "product_id" => $item->__get("id"),
                    "price" => $item->__get("price"),
                    "qty" => $item->pivot->__get("qty")
                ]);
            }

            $currentUser = Auth::user()->name;
            $order = Order::where("user_id", Auth::id())->firstOrFail();
            session(['url_prev' => url()->previous()]);
            $vnp_TmnCode = "4IR9IT1N"; //Mã website tại VNPAY
            $vnp_HashSecret = "HGHXHIICTFXLYKHMDRNERVRGAYDSNTQU"; //Chuỗi bí mật
            $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
            $vnp_Returnurl = url("/return-payment");
            $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
            $vnp_OrderInfo = $currentUser . " Ủng Hộ Event GreenEarth";
            $vnp_OrderType = 'billpayment';
            $vnp_Amount = $grandTotal * 100;
            $vnp_Locale = 'vn';
            $vnp_IpAddr = request()->ip();

            $inputData = array(
                "vnp_Version" => "2.0.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef,
            );

            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }
            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . $key . "=" . $value;
                } else {
                    $hashdata .= $key . "=" . $value;
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }

            $vnp_Url = $vnp_Url . "?" . $query;
            if (isset($vnp_HashSecret)) {
                // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
                $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
                $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
            }
            Mail::send('mail.checkout-form', ["cart" => $cart->getItems, "user" => $currentUser, "order" => $order], function ($message) {
                $message->to(Auth::user()->__get("email"), Auth::user()->__get("name"))->subject('Green-Earth Order Detail' . Auth::user()->__get("name"));
            });
            event(new OrderCreated($order));
        } catch (\Exception $exception) {
            return redirect()->to("/")->with('message', 'Send Mail Failer!');
        }
        return redirect($vnp_Url);
    }
    public function Image()
    {
        $image = Image::all();
        return view("frontend.image", [
            "image" => $image
        ]);
    }
    public function search(){

    }
}
