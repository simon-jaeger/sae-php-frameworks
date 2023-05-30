<?php

namespace App\Services;

class Util {
  static function PhpIni() {
    return shell_exec('php --ini');
  }
}
