<?php

namespace App\Models;

use App\Base\BaseModel;
use Illuminate\Http\Request;

/**
 * @property string $title
 * @property string $content
 * @property numeric $user_id
 */
class Note extends BaseModel {
  static $rules = [
    'title' => ['required', 'min:3', 'max:255'],
    'content' => ['required'],
  ];

  protected $with = ['tags'];

  function tags() {
    return $this->belongsToMany(Tag::class);
  }
}
