<?php

namespace App\Models;

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

  static function table() {
    return with(new static)->getTable();
  }
}
