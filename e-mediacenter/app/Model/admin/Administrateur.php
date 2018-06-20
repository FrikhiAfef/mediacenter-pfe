<?php

namespace App\Model\admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrateur extends Authenticatable
{
    use Notifiable;
    protected $guard ='administrateur';
    public function roles()
    {
        return $this->belongsToMany('App\Model\admin\role');
    }

    protected $fillable = [
        'nom', 'email', 'password','tel', 'statut',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
