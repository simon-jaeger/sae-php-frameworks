<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class MetaController {
  function ping(Request $request) {
    return "pong";
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
    return array_sum($input);
  }

  function fahrenheit(Request $request) {
    $celsius = $request->input('celsius');
    return ($celsius * 9 / 5) + 32;
  }

  function pythagoras(Request $request) {
    $a = $request->input('a');
    $b = $request->input('b');
    return sqrt($a ** 2 + $b ** 2);
  }

  function now() {
    return Carbon::now('Europe/Zurich')->toTimeString();
  }

  function debug(Request $request) {
    return 'debug stuff here';
  }
}
