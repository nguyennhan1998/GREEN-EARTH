<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    use HandlesAuthorization;


    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function list(User $user)
    {
        return $user->hasPermission("list_user");
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function new(User $user)
    {
        return $user->hasPermission("new_user");
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function save(User $user)
    {
        return $user->hasPermission("save_user");
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function delete(User $user,User $model)
    {
        return $model->__get("id")==Auth::id() && $user->hasPermission("delete_user");
    }
    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     * $model->__get("id") == Auth::id() &&
     */
    public function edit(User $user,User $model){
//        dd($model->__get("id") == Auth::id() && $user->hasPermission("edit_user"));
        return $model->__get("id") == Auth::id() && $user->hasPermission("edit_user");
    }
    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function update(User $user,User $model){

        return $model->__get("id")==Auth::id() && $user->hasPermission("update_user");

    }


}
