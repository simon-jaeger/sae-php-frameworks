<?php

namespace App\Base;

use App\Models\IdeHelper;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model as BaseModel;
use Lab404\Impersonate\Models\Impersonate;
use VicGutt\AutoModelCast\Concerns\HasAutoCasting;
use VicGutt\AutoModelCast\Contracts\AutoCastable;

/**
 *
 * @mixin IdeHelper
 */
class Model extends BaseModel implements AutoCastable, AuthenticatableContract {
  use HasAutoCasting, AuthenticatableTrait, Impersonate;

  protected $guarded = ['id'];
  protected $hidden = ['pivot', 'password'];
}
