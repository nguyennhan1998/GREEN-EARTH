<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function returnPayment(Request $request)
    {
        $url = session('url_prev','/');
        if($request->vnp_ResponseCode == "00") {
            return redirect("/event")->with("success")->with('message', 'Donate Successfully!');
        }
        session()->forget('url_prev')
        ;
        return redirect($url)->with('errors' ,'Lỗi trong quá trình thanh toán phí dịch vụ');
    }
    public function returnPayment2(Request $request)
    {
        $url = session('url_prev','/');
        if($request->vnp_ResponseCode == "00") {
            return redirect("/shop")->with("success")->with('message', "Transaction Successfully!");
        }
        session()->forget('url_prev')
        ;
        return redirect($url)->with('errors' ,'Lỗi trong quá trình thanh toán phí dịch vụ');
    }
}
