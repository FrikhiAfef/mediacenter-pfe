<?php

namespace App\Model\responsable\radio;

use Illuminate\Database\Eloquent\Model;

class equipe extends Model
{
    public function getRouteKeyName()
    {
        return 'nom';
    }
}
