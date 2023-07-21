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
  static function validate(Request $request) {
    $requiredIfnew = $request->isMethod('post') ? 'required' : 'sometimes';
    return $request->validate([
      'title' => ['required', 'max:100', 'min:2'],
      'content' => [$requiredIfnew],
    ]);
  }
}
