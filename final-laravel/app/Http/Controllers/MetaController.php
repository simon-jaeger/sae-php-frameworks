<?php

namespace App\Http\Controllers;

use App\Services\Util;

class MetaController extends Controller {
  function ping() {
    return "pong";
  }

  function now() {
    return time();
  }

  function debug() {
    return Util::PhpIni();
  }
}
