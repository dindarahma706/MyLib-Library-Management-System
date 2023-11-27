<?php

namespace App\Policies;

use App\Models\User;
use App\Models\book_issue;
use Illuminate\Auth\Access\HandlesAuthorization;

class BookIssuePolicy
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
     * Menentukan apakah pengguna dapat melihat model tertentu.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\book_issue  $bookIssue
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, book_issue $bookIssue)
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
     * @param  \App\Models\book_issue  $bookIssue
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, book_issue $bookIssue)
    {
        //
    }

    /**
     * Menentukan apakah pengguna dapat menghapus model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\book_issue  $bookIssue
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, book_issue $bookIssue)
    {
        //
    }

    /**
     * Menentukan apakah pengguna dapat mengembalikan model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\book_issue  $bookIssue
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, book_issue $bookIssue)
    {
        //
    }

    /**
     * Menentukan apakah pengguna dapat menghapus secara permanen.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\book_issue  $bookIssue
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, book_issue $bookIssue)
    {
        //
    }
}
