<?php

namespace App\Model\responsable\radio;

use Illuminate\Database\Eloquent\Model;

class evenement extends Model
{
    public function getRouteKeyName()
    {

        return 'nomEven';
    }
}
