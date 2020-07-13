<?php

namespace App\Policies;

use App\Article;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;
use const http\Client\Curl\AUTH_ANY;

class ArticlePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Article  $article
     * @return mixed
     */
    public function list(User $user)
    {
        return $user->hasPermission('list_article');
    }
    public function new(User $user)
    {
        return $user->hasPermission("new_article");
    }
    public function edit(User $user, Article $article)
    {
        return $article->__get("user_id")==Auth::id() && $user->hasPermission("edit_article");
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function save(User $user)
    {
        return $user->hasPermission("save_article");
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Article  $article
     * @return mixed
     */
    public function update(User $user, Article $article)
    {
        return $article->__get("user_id")==Auth::id() && $user->hasPermission("update_article");
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Article  $article
     * @return mixed
     */
    public function delete(User $user, Article $article)
    {
        return $article->__get("user_id")==Auth::id() && $user->hasPermission("delete_article");
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Article  $article
     * @return mixed
     *
     */
    public function restore(User $user, Article $article)
    {


    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Article  $article
     * @return mixed
     */
    public function forceDelete(User $user, Article $article)
    {
        //
    }
}
