<?php

namespace App\Policies;

use App\Model\admin\Administrateur;

use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the Administrateur can view the emission.
     *
     * @param  \App\Administrateur  $Administrateur
     * @param  \App\emission  $post
     * @return mixed
     */
    public function view(Administrateur $user, emission $post)
    {
        //
    }

    /**
     * Determine whether the Administrateur can create emissions.
     *
     * @param  \App\Administrateur  $Administrateur
     * @return mixed
     */
    public function create(Administrateur $user)
    {
        return $this->getPermission($user,2);
    }

    /**
     * Determine whether the Administrateur can update the emission.
     *
     * @param  \App\Administrateur  $Administrateur
     * @param  \App\emission  $post
     * @return mixed
     */
    public function update(Administrateur $user)
    {
        return $this->getPermission($user,5);
    }

    /**
     * Determine whether the Administrateur can delete the emission.
     *
     * @param  \App\Administrateur  $Administrateur
     * @param  \App\emission  $post
     * @return mixed
     */
    public function delete(Administrateur $user)
    {
        return $this->getPermission($user,3);
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
