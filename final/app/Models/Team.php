<?php

namespace App\Models;

use App\Base\BaseModel;
use Illuminate\Http\Request;

/**
 * @property string $name
 */
class Team extends BaseModel {
  function users() {
    return $this->belongsToMany(User::class);
  }
}
