<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class Plafond extends Model
{
  use Authenticatable;
  protected $table = 'plafond';
  protected $primaryKey = 'idPlafond';
}
