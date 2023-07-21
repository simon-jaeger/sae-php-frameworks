<?php

namespace App\Base;

use App\Models\IdeHelper;
use Illuminate\Database\Eloquent\Model as LaravelModel;
use VicGutt\AutoModelCast\Concerns\HasAutoCasting;
use VicGutt\AutoModelCast\Contracts\AutoCastable;

/**
 *
 * @mixin IdeHelper
 */
class BaseModel extends LaravelModel implements AutoCastable {
  use HasAutoCasting;

  protected $guarded = ['id'];

  static function table() {
    return with(new static)->getTable();
  }
}
