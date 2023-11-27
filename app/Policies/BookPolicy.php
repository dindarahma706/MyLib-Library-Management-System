<?php

namespace App\Policies;

use App\Models\User;
use App\Models\book;
use Illuminate\Auth\Access\HandlesAuthorization;

class BookPolicy
{
    use HandlesAuthorization;

    /**
     *
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     *
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\book  $book
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, book $book)
    {
        //
    }

    /**
     *
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     *
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\book  $book
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, book $book)
    {
        //
    }

    /**
     *
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\book  $book
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, book $book)
    {
        //
    }

    /**
     *
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\book  $book
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, book $book)
    {
        //
    }

    /**
     *
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\book  $book
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, book $book)
    {
        //
    }
}
