<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Techno extends Model
{
    use HasFactory;
    protected $fillable = [
       'titre',
       'domain_id',

    ];

    public function Domain(){
        return $this->belongsTo('App\Models\domain','domain_id'); 
     }

    public function User(){
        return $this->belongsToMany(
            User::class,
            'users_technos',
            'techno_id',
            'user_id');
    }

    public function Offre(){
        return $this->belongsToMany(
            Offre::class,
            'offres_technos',
            'techno_id',
            'offre_id');
    }



}
