<?php

namespace App\Policies;

use App\Event;
use App\User;
use App\Role;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;
class EventPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
//    public function list(User $user)
//    {
//        // dd($user)
//        //
//
//        return $user->hasPermission("list_event");
//    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Event  $event
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->hasPermission("list_event");
    }

    public function new(User $user)
    {
        return $user->hasPermission("new_event");
    }

    public function edit(User $user, Event $event)
    {

        return $event->__get("user_id") == Auth::id() && $user->hasPermission("edit_event");
    }
    public function save(User $user)
    {

        return $user->hasPermission("save_event");
    }


    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Event  $event
     * @return mixed
     */
    public function update(User $user, Event $event)
    {
        return $event->__get("user_id") == Auth::id() && $user->hasPermission("update_event");
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Event  $event
     * @return mixed
     */
    public function delete(User $user, Event $event)
    {
        return $event->__get("user_id") == Auth::id() && $user->hasPermission("delete_event");
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Event  $event
     * @return mixed
     */
    public function restore(User $user, Event $event)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Event  $event
     * @return mixed
     */
    public function forceDelete(User $user, Event $event)
    {
        //
    }


}
