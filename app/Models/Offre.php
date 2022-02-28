<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'poste',
        'salaire',
        'deadline',
        'description',
        'test',
 
     ];


     public function User(){
        return $this->belongsTo('App\Models\User','user_id'); 
     }

     public function Users(){
      return $this->belongsToMany(
          User::class,
          'users_offres',
          'offre_id',
          'user_id')->withPivot('cv')->withPivot('test')->withTimestamps();
  }

  public function Techno(){
    return $this->belongsToMany(
        Techno::class,
        'offres_technos',
        'offre_id',
        'techno_id')->withTimestamps();
}

  
}
