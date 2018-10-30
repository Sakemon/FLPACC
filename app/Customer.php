<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class Customer extends Model
{
  use Authenticatable;
  protected $table = 'customer';
  protected $primaryKey = 'idcustomer';
}
