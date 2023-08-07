<?php

namespace App\Helpers;

class Color {
  const BLACK = '#000000';
  const WHITE = '#ffffff';
  const BRAND = '#4267B2'; // facebook blue

  static function random() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
  }

  static function invert(string $color) {
    return '#' . substr(dechex(~hexdec(substr($color, 1))), -6);
  }

  static function isGray(string $color) {
    $red = substr($color, 1, 2);
    $green = substr($color, 3, 2);
    $blue = substr($color, 5, 2);
    var_dump($red, $green, $blue);
    return $red === $green && $green === $blue;
  }
}
