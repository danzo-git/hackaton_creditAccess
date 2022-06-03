<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recouvreurs extends Model
{
   public function Dossier(){
       $this->belongsTo(Dossier::class);
   }
}
