<?php

namespace App\Http\Controllers;

use App\RoleUser;
use App\User;
use App\Role;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\String\u;

class UserController extends Controller
{
    public function listUser()
    {
        $this->authorize("list", User::class);

//        $users = DB::table("users")->leftJoin("role_user", "users.id", "=", "role_user.user_id")
//        /*    User::leftjoin("role_user", "users.id", "=", "role_user.user_id")*/
//            ->leftJoin("roles", "roles.id","=", "role_user.user_id")
        $users = DB::table("role_user")->leftJoin("users", "users.id", "=", "role_user.user_id")
            ->leftJoin("roles", "roles.id", "=", "role_user.role_id")
            ->select("users.*", "roles.*", "users.name as users_name", "users.id as user_id")
//                ->groupByRaw("users.id")
            ->get();
        //dd($users);
//            $users1 = collect($users);
        //dd($users);
        $new = [];
        foreach ($users as $element) {
            $new[$element->email][] = $element;
        }
        $new = array_values($new);

        //dd(count($new[3]));
//            foreach ($new as $n){
//                dd($n);
//            }
        return view("admin.user.list", [
            "users" => $users,
            "news" => $new,
        ]);
    }

    public function updateUser(Request $request, $id)
    {
//        $users = User::findOrFail($id);
        $users = User::leftjoin("role_user", "users.id", "=", "role_user.user_id")
            ->leftjoin("roles", "roles.id", "=", "role_user.user_id")
            ->select("users.*", "roles.id as role_id", "roles.name as rolename")->find($id);
        $this->authorize("update", $users, User::class);
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
            if(RoleUser::where("role_id") !== $request->role_name && $request->role_name == 1){
                return redirect("/admin/users/list")->with("message","Cannot Update Admin For Personal User");
            }
            if (RoleUser::where("role_id") !== $request->role_name) {
                if (RoleUser::where('user_id', $users->id)->exists()) {
                    RoleUser::where('user_id', $users->id)->updateOrCreate([
                        "user_id" => $users->id,
                        "role_id" => $request->get("role_name"),
                    ]);
                }
            }
        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
        return redirect()->to("/admin/users/list");
    }
    public function dowPermission(){
        ///
    }

    public function newUser()
    {
        $roles = Role::where("id", ">", 2)->get();
        $this->authorize("new", User::class);
        return view("admin.user.new", [
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
            if (!$role_idarray) {
                RoleUser::create([
                    "user_id" => $userid+1,
                    "role_id" => 2,
                ]);
            } else {
                foreach ($role_idarray as $key => $role_id) {
                    RoleUser::create([
                        "user_id" => $userid+1,
                        "role_id" => $role_id,
                    ]);
                    RoleUser::create([
                        "user_id" => $userid+1,
                        "role_id" => 2,
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
        $user = User::leftjoin("role_user", "users.id", "=", "role_user.user_id")
            ->leftjoin("roles", "roles.id", "=", "role_user.user_id")
            ->select("users.*", "roles.name as rolename")->findOrFail($id);
        $roles = Role::all();
        $this->authorize("edit", $user, User::class);

        return view("admin.user.edit", [
            "user" => $user,
            "roles" => $roles,

        ]);
    }
}
