<?php

namespace App\Http\Controllers;

class MetaController extends Controller {
  function ping() {
    return "pong";
  }

  function now() {
    return time();
  }
}
