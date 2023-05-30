<?php

namespace App\Http\Controllers;

use App\Services\Util;
use Illuminate\Http\Request;

class MetaController extends Controller {
  function ping() {
    return "pong";
  }

  function now() {
    return time();
  }

  function echo(Request $request) {
    $msg = $request->input('msg');
    return $msg;
  }

  function debug() {
    return Util::PhpIni();
  }
}
