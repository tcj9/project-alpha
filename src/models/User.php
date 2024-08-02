<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'username',
        'email',
        'password',
        'first_name',
        'last_name',
        'profile_picture',
        'bio',
        'phone_number',
        'address',
        'city',
        'state',
        'country',
        'date_of_birth',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [
        'password',
    ];

}
