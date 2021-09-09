<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = "users";

    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'date de naissance',
        'email',
        'mot de passe',
        'photo de profile',
        'role_id'
    ];
}


