<?php

namespace App\Http\Controllers;

use App\RoleUser;
use App\User;
use App\Role;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function listUser()
    {
        $this->authorize("list", User::class);

        $users = User::leftjoin("role_user", "users.id", "=", "role_user.user_id")
            ->leftjoin("roles", "roles.id", "=", "role_user.user_id")
            ->select("users.*", "roles.id as role_id", "roles.name as rolename")->get();
        return view("admin.user.list", [
            "users" => $users,
        ]);
    }

    public function updateUser(Request $request,$id)
    {
//        dd($request->all());
//        $users = User::findOrFail($id);
        $users = User::leftjoin("role_user", "users.id", "=", "role_user.user_id")
            ->leftjoin("roles", "roles.id", "=", "role_user.user_id")
            ->select("users.*", "roles.id as role_id", "roles.name as rolename")->find($id);
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
            if(RoleUser::where('user_id',$users->id  && 'role_id',$users->roleid)){
                RoleUser::where('user_id',$users->id  && 'role_id',$users->roleid)->create([
                   'user_id' => $users->id,
                   'role_id' => $request->role_name,
                ]);
            }
        } catch (\Exception $exception) {
            dd($exception->getMessage());
    }
        return redirect()->to("/admin/users/list");
    }

    public function newUser()
    {
        $roles = Role::where("id",">",2)->get();
        $this->authorize("new", User::class);
        return view("admin.user.new",[
            "roles" => $roles
        ]);
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
        $user = DB::table("users")->select('id')->latest('id')->first();
        $userid = $user->id;
        $this->authorize("save", User::class);
        $role_idarray = $request->get("checkbox");
        $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
        ]);
        try {
            User::create([
                "name" => $request->get("name"),
                "email" => $request->get("email"),
                "password" => bcrypt($request->get("password")),
            ]);
            if(!$role_idarray){
                RoleUser::create([
                    "user_id" => $userid+1,
                    "role_id" => 2,
                ]);
            }else{
                foreach ($role_idarray as $key => $role_id){
                    RoleUser::create([
                        "user_id" => $userid+1,
                        "role_id" => $role_id,
                    ]);
                }
            }
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
        return redirect("/admin/users/list");
    }

    public function editUser($id)
    {
        $user =User::leftjoin("role_user","users.id","=","role_user.user_id")
        ->leftjoin("roles","roles.id","=","role_user.user_id")
        ->select("users.*","roles.name as rolename")->findOrFail($id);
        $roles = Role::all();
        $this->authorize("edit", $user, User::class);

        return view("admin.user.edit", [
            "user" => $user,
            "roles" => $roles,
        ]);
    }
}
