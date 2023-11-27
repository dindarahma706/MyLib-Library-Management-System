<?php

namespace App\Policies;

use App\Models\User;
use App\Models\auther;
use Illuminate\Auth\Access\HandlesAuthorization;

class AutherPolicy
{
    use HandlesAuthorization;

    /**
     * Menentukan apakah pengguna dapat melihat model apa pun.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Menentukan apakah pengguna dapat melihat model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\auther  $auther
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, auther $auther)
    {
        //
    }

    /**
     * Menentukan apakah pengguna dapat membuat model.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Menentukan apakah pengguna dapat mengupdate model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\auther  $auther
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, auther $auther)
    {
        //
    }

    /**
     * Menentukan apakah pengguna dapat menghapus model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\auther  $auther
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, auther $auther)
    {
        //
    }

    /**
     * Menentukan apakah pengguna dapat mengembalikan model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\auther  $auther
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, auther $auther)
    {
        //
    }

    /**
     * Menentukan apakah pengguna dapat menghapus model secara permanen.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\auther  $auther
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, auther $auther)
    {
        //
    }
}
