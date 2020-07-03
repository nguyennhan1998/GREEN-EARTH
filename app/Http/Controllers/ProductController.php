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
            "price" => "required",
            "event_id" => "required",
        ]);
        try {
            Product::create([
                "name" => $request->get("name"),
                "price" => $request->get("price"),
                "event_id" => $request->get("event_id"),

            ]);
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/list-product");

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
            "price" => "required",
            "event_id" => "required",
        ]);
        try {
            $products->update([
                "name" => $request->get("name"),
                "price" => $request->get("price"),
                "event_id" => $request->get("event_id"),
            ]);
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/list-product");
    }

    public function deleteProduct($id)
    {
        $products = Product::findOrFail($id);
        try {
            $products->delete();
        } catch (\Exception $exception) {
        }
        return redirect()->to("/list-product");
    }

}
