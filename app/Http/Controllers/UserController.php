<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listUser()
    {
        $users=User::all();

        return view("admin.user.list",[
            "users"=>$users,
        ]);
    }

    public function updateUser(Request $request, $id)
    {
        $users =User::findOrFail($id);

        $request->validate([
            "name",
            "email",
            "password",
        ]);
        try {
            $users->update([
                "name"=>$request->get("name"),
                "email"=>$request->get("email"),
                "password"=>$request->get("password"),
            ]);
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/admin/list-user");

    }

    public function newUser(){
        return view("admin.user.new");
    }
    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        try {
            $user->delete();
        } catch (\Exception $exception) {
        }
        return redirect()->to("admin/list-user");
    }

    public function saveUser(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
        ]);
        try {
            User::create([
                "name" => $request->get("name"),
                "email" => $request->get("email"),
                "password" => $request->get("password"),

            ]);
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("admin/list-user");

    }
    public function editUser($id)
    {
        $user=User::findOrFail($id);
        return view("admin.user.edit",[
            "user"=>$user,
        ]);
    }
}
