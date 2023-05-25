<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;

/**
 *
 * @mixin IdeHelper
 */
class Model extends BaseModel {
  protected $guarded = ['id'];
  static function table() {
    return with(new static)->getTable();
  }
}
