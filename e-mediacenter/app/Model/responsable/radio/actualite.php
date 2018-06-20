<?php

namespace App\Model\responsable\radio;

use Illuminate\Database\Eloquent\Model;

class actualite extends Model
{
    public function getRouteKeyName()
    {
        return 'titre';
    }
}
