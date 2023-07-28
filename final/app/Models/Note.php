<?php

namespace App\Models;

use App\Base\BaseModel;
use Illuminate\Http\Request;

/**
 * @property string $name
 * @property numeric $user_id
 */
class Note extends BaseModel {
  protected $with = ['tags'];

  static function validate(Request $request) {
    $requiredIfnew = $request->isMethod('post') ? 'required' : 'sometimes';
    return $request->validate([
      'title' => ['required', 'max:100', 'min:2'],
      'content' => [$requiredIfnew],
    ]);
  }

  function tags() {
    return $this->belongsToMany(Tag::class);
  }
}
