<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class TweetsController extends Controller {
  function index() {
    return Tweet::all();
  }

  function create() {
    $model = Tweet::create([
      'text' => 'demo tweet',
    ]);
    return $model;
  }
}
