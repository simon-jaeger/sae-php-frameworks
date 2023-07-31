<?php

namespace App\Models;

use App\Base\Model;
use Illuminate\Http\Request;

/**
 * @property string $title
 * @property string $content
 * @property int $user_id
 */
class Note extends Model {
  static $rules = [
    'title' => ['required', 'string', 'min:1', 'max:255'],
    'content' => ['required', 'string'],
  ];

  protected $with = ['tags'];

  function tags() {
    return $this->belongsToMany(Tag::class);
  }
}
