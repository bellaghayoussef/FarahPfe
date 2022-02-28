<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certif extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'titre',

    ];

    public function User()
    {
        return $this->belongsToMany(
            User::class,
            'users_certifs',
            'certif_id',
            'user_id'
        );
    }
}
