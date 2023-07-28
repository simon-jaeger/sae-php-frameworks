<?php

namespace App\Base;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Lab404\Impersonate\Models\Impersonate;

class BaseUser extends BaseModel implements AuthenticatableContract {
  use Authenticatable, Impersonate;

  protected $hidden = ['pivot', 'password'];
}
