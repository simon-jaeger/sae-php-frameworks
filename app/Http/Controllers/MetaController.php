<?php

namespace App\Http\Controllers;

use App\Services\Util;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MetaController extends Controller {
  function ping() {
    return "pong";
  }

  function debug() {
    return 'debug stuff here';
  }

  function now() {
    return Carbon::now('Europe/Zurich')->toTimeString();
  }

  function echo(Request $request) {
    $input = $request->input('input');
    return $input;
  }

  function reverse(Request $request) {
    $input = $request->input('input');
    return \Str::reverse($input);
  }

  function sum(Request $request) {
    $input = $request->input('input');
    $collection = collect($input);
    return $collection->sum();
  }
}
