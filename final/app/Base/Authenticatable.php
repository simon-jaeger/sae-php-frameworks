<?php

namespace App\Base;

use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Lab404\Impersonate\Models\Impersonate;

class Authenticatable extends Model implements AuthenticatableContract {
  use AuthenticatableTrait, Impersonate;

  protected $hidden = ['pivot', 'password'];
}
