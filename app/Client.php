<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nom', 'prenom','naissance','lieu', 'telephone','piece','regime','sexe','enfant','profession','email','employeur',"adresse_pro","salaire","phone_bureau","loyer","designation","type_materiel","marque","categorie","fnom","fmail","fmail","fphone","email","isclient",'mdp'];
}
