<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class Car extends Model
{
  use Authenticatable;
  protected $table = 'car';
  protected $primaryKey = 'idCar';
}
