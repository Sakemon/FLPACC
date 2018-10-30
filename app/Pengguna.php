<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Auth\Authenticatable;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Pengguna extends Model implements Authenticatable
{
  use AuthenticableTrait;
  protected $table = 'pengguna';
  protected $primaryKey = 'idPengguna';

  protected $fillable = [
      'namaPengguna',
  ];

  protected $hidden = [
      'password', 'remember_token',
];
}
