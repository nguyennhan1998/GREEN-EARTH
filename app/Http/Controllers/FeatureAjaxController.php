<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FeatureAjaxController extends Controller
{
    public function getSearch(Request $request){
        if ($request->ajax()) {
            $output = '';
//            $products = Product::whereRaw('LOWER("name") like ?','%'.strtolower($request->search).'%')->get();
            $products = Product::where("name","like",'%'. $request->search. '%')->get();
            if ($products) {
                foreach ($products as $key => $product) {
                    $output .= '<tr>
                    <td><img style="width: 50px; height: 50px;" src="' . $product->image1 . '" ></td>
                    <td><a href="'. $product->getProductUrl() . '"> ' . $product->name . '</a></td>
                    <td>' . $product->price . '</td>
                    </tr>';
                }
            }
            return Response($output);
        }
    }
}
