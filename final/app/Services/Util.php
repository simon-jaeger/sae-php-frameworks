<?php

namespace App\Services;

class Util {
  static function randomHexColor() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
  }

  static function PhpIni() {
    return shell_exec('php --ini');
  }
}
