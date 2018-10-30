<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class Temporary extends Model
{
  use Authenticatable;
  protected $table = 'temporary';
  protected $primaryKey = 'id';
}
