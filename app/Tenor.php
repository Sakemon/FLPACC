<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class Tenor extends Model
{
  use Authenticatable;
  protected $table = 'tenor';
  protected $primaryKey = 'idtenor';
}
