<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Auth\Authenticatable;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
    use AuthenticableTrait;
    protected $table = 'user';
    protected $primaryKey = 'idUser';

    protected $fillable = [
        'username',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
