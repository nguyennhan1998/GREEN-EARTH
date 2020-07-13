<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listUser()
    {
        $this->authorize("list", User::class);
        $users = User::all();
        return view("admin.user.list", [
            "users" => $users,
        ]);
    }

    public function updateUser(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $this->authorize("update",$users,User::class);
        $request->validate([
            "name",
            "email",
            "password",
        ]);
        try {
            $users->update([
                "name" => $request->get("name"),
                "email" => $request->get("email"),
                "password" => $request->get("password"),
            ]);
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/admin/users/list");

    }

    public function newUser()
    {
        $this->authorize("new", User::class);
        return view("admin.user.new");
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $this->authorize("delete", $user, User::class);
        try {
            $user->delete();
        } catch (\Exception $exception) {

        }
        return redirect()->to("admin/users/list");
    }

    public function saveUser(Request $request)
    {
        $this->authorize("save", User::class);
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
        return redirect()->to("admin/users/list");

    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        $this->authorize("edit", $user, User::class);
        return view("admin.user.edit", [
            "user" => $user,
        ]);
    }
}
