<?php

namespace App\Base;

use App\Models\IdeHelper;
use Illuminate\Database\Eloquent\Model as BaseModel;
use VicGutt\AutoModelCast\Concerns\HasAutoCasting;
use VicGutt\AutoModelCast\Contracts\AutoCastable;

/**
 *
 * @mixin IdeHelper
 */
class Model extends BaseModel implements AutoCastable {
  use HasAutoCasting;

  protected $guarded = ['id'];
  protected $hidden = ['pivot'];
}
