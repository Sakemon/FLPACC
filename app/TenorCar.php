<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class TenorCar  extends Model
{
  use Authenticatable;
  protected $table = 'tenorcar';
  protected $primaryKey = 'idTenorCar';
}
