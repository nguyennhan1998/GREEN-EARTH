<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Event;
use App\Organize;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $this->authorize("view", Event::class);
        $organizations = Organize::all();
        $events = Event::paginate(20);
        return view("admin.event.list", [
            "events" => $events,
            "organizations" => $organizations,
        ]);
    }

    public function new()
    {
        $this->authorize("new", Event::class);
        $events = Event::paginate(20);
        $organizations = Organize::all();
        return view("admin.event.new",
            [
                "events" => $events,
                "organizations" => $organizations,
            ]);
    }

    public function save(Request $request)
    {
        $this->authorize("save", Event::class);
//        $request->validate([
//            "title"=>"required",
//            "image"=>"required",
//            "description"=>"required",
//            "content"=>"required",
//            "start_at"=>"required",
//            "end_at"=>"required",
//            "total_money"=>"required",
//            "organization_id"=>"required"
//        ]);
        try {
            Event::create([
                "title" => $request->get("title"),
                "image" => $request->get("image"),
                "description" => $request->get("description"),
                "content" => $request->get("content"),
                "start_at" => $request->get("start_at"),
                "end_at" => $request->get("end_at"),
                "target_money" => $request->get("total_money"),
                "organization_id" => $request->get("organization_id"),
                "user_id" => Auth::id()
            ]);

        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
//       return redirect()->to("/admin/events/list");
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $this->authorize("edit", $event, Event::class);
        $organizations = Organize::all();
        return view("admin.event.edit", [
            "event" => $event,
            "organizations" => $organizations,
        ]);
    }

    public function update($id, Request $request)
    {
        $event = Event::findOrFail($id);
        $this->authorize("update", $event, Event::class);
        $request->validate([
            "title" => "required",
            "image" => "required",
            "description" => "required",
            "content" => "required",
            "start_at" => "required",
            "end_at" => "required",
            "total_money" => "required",
            "organization_id" => "required"
            // a thi ko de sua
            // ma day la event tui em donate o trong event luon ah van anh nhin cai database bon e ne
            // dang call voi ai ko thi sky chat hoi kho
        ]);
        try {
            $event->update([
                "title" => $request->get("title"),
                "image" => $request->get("image"),
                "description" => $request->get("description"),
                "content" => $request->get("content"),
                "start_at" => $request->get("start_at"),
                "end_at" => $request->get("end_at"),
                "total_money" => $request->get("total_money"),
                "organization_id" => $request->get("organization_id")
            ]);
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/admin/events/list");
    }

    public function delete($id)
    {
        $event = Event::findOrFail($id);
        $this->authorize("delete", $event, Event::class);

        try {
            $event->delete();
        } catch (\Exception $exception) {

        }
        return redirect()->to("admin/events/list");
    }

    public function saveMoney(Request $request, $id)
    {
        $currentUser = Auth::user()->name;
        $event = Event::findOrFail($id);
        $money = 0;
        if ($request->has("donatevaluecustom")) {
            $money += $request->get("donatevaluecustom");
        }
        if ($request->get("donatevaluecustom") === null) {
            $money += $request->get("sotienungho");
        }
        session(['url_prev' => url()->previous()]);
        $vnp_TmnCode = "4IR9IT1N"; //Mã website tại VNPAY
        $vnp_HashSecret = "HGHXHIICTFXLYKHMDRNERVRGAYDSNTQU"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = url("/return-greenearth");
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = $currentUser." Ủng Hộ Event GreenEarth";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $money * 100;
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
        $event->update([
            "raiser_money" => $event->raiser_money + $money,
        ]);
        return redirect($vnp_Url);
    }
}
