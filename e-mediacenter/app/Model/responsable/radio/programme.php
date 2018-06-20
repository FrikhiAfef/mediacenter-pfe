<?php

namespace App\Model\responsable\radio;

use Illuminate\Database\Eloquent\Model;

class programme extends Model
{
    public function getRouteKeyName()
    {
        return 'nomE';
    }
}
