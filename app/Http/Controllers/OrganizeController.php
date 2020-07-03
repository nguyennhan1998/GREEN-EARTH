<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Organize;
use Illuminate\Http\Request;
use Mockery\Exception;

class OrganizeController extends Controller
{
    public function newOrganize()
    {
        return view("admin.organize.new");
    }

    public function listOrganize()
    {
        $organizations = Organize::paginate(20);
        return view("admin.organize.list", [
            "organizations" => $organizations
        ]);
    }

    public function saveOrganize(Request $request)
    {
        $request->validate([
            "name" => "required|string|min:2|unique:organizations",
            "email" => "required",
            "phone" => "required",
            "address" => "required",
            "client_id" => "required",
            "secret" => "required",
            "team_size" => "required",
        ]);
        try{
            Organize::create([
                "name"=> $request->get("name"),
                "email"=> $request->get("email"),
                "phone"=> $request->get("phone"),
                "address"=> $request->get("address"),
                "client_id"=> $request->get("client_id"),
                "secret"=> $request->get("secret"),
                "team_size"=> $request->get("team_size"),

            ]);
        }catch (\Exception $exception){
            return redirect()->back();

        }
        return redirect()->to("admin/list-organize");

    }

    public function editOrganize($id){
        $organize = Organize::findOrFail($id);
        return view("admin.organize.edit",
            ["organize"=>$organize]);
    }
    public function updateOrganize($id, Request $request){
        $organize = Organize::findOrFail($id);
        $request->validate([
            "name" => "required|string|min:2|unique:organizations,name,{$id}",
            "email" => "required",
            "phone" => "required",
            "address" => "required",
            "client_id" => "required",
            "secret" => "required",
            "team_size" => "required",
        ]);
        try {
            $organize->update([
                "name"=> $request->get("name"),
                "email"=> $request->get("email"),
                "phone"=> $request->get("phone"),
                "address"=> $request->get("address"),
                "client_id"=> $request->get("client_id"),
                "secret"=> $request->get("secret"),
                "team_size"=> $request->get("team_size"),
            ]);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("admin/list-organize");
    }
    public function deleteOrganize($id){
        $organize = Organize::findOrFail($id);
        try{
            $organize->delete();
        }catch (\Exception $exception){
        }
        return redirect()->to("admin/list-organize");
    }
}
