<?php

namespace App\Services;

class Util {
  static function randomHexColor() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
  }

  static function toUsd(int $cents) {
    return number_format($cents / 100, 2) . "$";
  }

  static function greeting(int $hour) {
    if ($hour < 4) return 'Good night';
    if ($hour < 12) return 'Good morning';
    if ($hour < 18) return 'Good afternoon';
    if ($hour < 24) return 'Good evening';
    return 'Hello';
  }

  static function PhpIni() {
    return shell_exec('php --ini');
  }
}
