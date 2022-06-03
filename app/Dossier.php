<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    //
    public function clients()
    {
        return $this->hasMany(Client::class);
    }
    public function recouvreurs()
    {
        return $this->hasMany(recouvreurs::class);
    }
}
