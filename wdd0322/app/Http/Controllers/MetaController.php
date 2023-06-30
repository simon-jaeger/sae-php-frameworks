<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetaController {
  function ping(Request $request) {
    return "pong";
  }
}
