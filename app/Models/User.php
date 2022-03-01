<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasApiTokens;
    use HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
        'avatar',
        'phone',
        'matricule',
        'niveau',
        'cin',
       
        
        'cv'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Techno()
    {
        return $this->belongsToMany(
            Techno::class,
            'users_technos',
            'user_id',
            'techno_id'
        );
    }

    public function Certif()
    {
        return $this->belongsToMany(
            Certif::class,
            'users_certifs',
            'user_id',
            'certif_id'
        );
    }
    public function Offre()
    {
        return $this->belongsToMany(
            Offre::class,
            'users_offres',
            'user_id',
            'offre_id'
        )->withPivot('cv')->withPivot('test')->withTimestamps();
    }
}
