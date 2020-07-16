<?php

namespace App\Http\Controllers;

use App\Event;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProduct()
    {
        $products = Product::all();
        return view("admin.product.list", [
            "products" => $products
        ]);
    }

    public function newProduct()
    {
        $events = Event::all();
        return view("admin.product.new",
            [
                "events" => $events

            ]);
    }

    public function saveProduct(Request $request)
    {
        $request->validate([
            "name" => "required",
            "image1"=>"required",
            "image2"=>"required",
            "image3"=>"required",
            "image4"=>"required",
            "qty"=>"required",
            "price" => "required",
            "event_id" => "required",
        ]);
        try {
            Product::create([
                "name" => $request->get("name"),
                "image1" => $request->get("image1"),
                "image2" => $request->get("image2"),
                "image3" => $request->get("image3"),
                "image4" => $request->get("image4"),
                "qty" => $request->get("qty"),
                "price" => $request->get("price"),
                "event_id" => $request->get("event_id"),

            ]);
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("admin/list-product");

    }

    public function editProduct($id)
    {
        $products = Product::findOrFail($id);
        $events = Event::all();
        return view("admin.product.edit",
            [
                "products" => $products,
                "events" => $events,
            ]);
    }

    public function updateProduct($id, Request $request)
    {
        $products = Product::findOrFail($id);
        $request->validate([
            "name" => "required",
            "image1"=>"required",
            "image2"=>"required",
            "image3"=>"required",
            "image4"=>"required",
            "qty"=>"required",
            "price" => "required",
            "event_id" => "required",
        ]);
        try {
            $products->update([
                "name" => $request->get("name"),
                "image1" => $request->get("image1"),
                "image2" => $request->get("image2"),
                "image3" => $request->get("image3"),
                "image4" => $request->get("image4"),
                "qty" => $request->get("qty"),
                "price" => $request->get("price"),
                "event_id" => $request->get("event_id"),
            ]);
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("admin/list-product");
    }

    public function deleteProduct($id)
    {
        $products = Product::findOrFail($id);
        try {
            $products->delete();
        } catch (\Exception $exception) {
        }
        return redirect()->to("admin/list-product");
    }

}
