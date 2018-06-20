<?php

namespace App\Policies;

use App\Model\admin\Administrateur;

use App\Model\admin\animateur;
use Illuminate\Auth\Access\HandlesAuthorization;

class AnimateurPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the animateur.
     *
     * @param  \App\User  $user
     * @param  \App\Model\admin\animateur  $animateur
     * @return mixed
     */
    public function view(Administrateur $user, animateur $animateur)
    {

    }

    /**
     * Determine whether the user can create animateurs.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Administrateur $user)
    {
        return $this->getPermission($user,17);
    }

    /**
     * Determine whether the user can update the animateur.
     *
     * @param  \App\User  $user
     * @param  \App\Model\admin\animateur  $animateur
     * @return mixed
     */
    public function update(Administrateur $user, animateur $animateur)
    {
        return $this->getPermission($user,18);
    }

    /**
     * Determine whether the user can delete the animateur.
     *
     * @param  \App\User  $user
     * @param  \App\Model\admin\animateur  $animateur
     * @return mixed
     */
    public function delete(Administrateur $user, animateur $animateur)
    {
        return $this->getPermission($user,19);
    }
    protected function getPermission($user,$p_id)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == $p_id) {
                    return true;
                }
            }
        }
        return false;
    }
}
