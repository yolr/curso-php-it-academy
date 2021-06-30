<?php

namespace App\Policies;

use App\Models\User;
use App\Models\partido;
use Illuminate\Auth\Access\HandlesAuthorization;

class PartidoPolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability)
{
    if ($user->hasRole('Admin')) {
        return true;
   
    }
}

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\partido  $partido
     * @return mixed
     */
    public function view(User $user, partido $partido)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\partido  $partido
     * @return mixed
     */
    public function update(User $user, partido $partido)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\partido  $partido
     * @return mixed
     */
    public function delete(User $user, partido $partido)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\partido  $partido
     * @return mixed
     */
    public function restore(User $user, partido $partido)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\partido  $partido
     * @return mixed
     */
    public function forceDelete(User $user, partido $partido)
    {
        //
    }
}
