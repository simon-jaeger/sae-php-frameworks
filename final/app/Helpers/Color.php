<?php

namespace App\Helpers;

use Str;

class Color {
  const BLACK = '#000000';
  const WHITE = '#ffffff';
  const BRAND = '#4267B2'; // facebook blue

  static function random() {
    return '#' . Str::padLeft(dechex(mt_rand(0, 16777215)), 6, '0');
  }

  static function invert(string $color) {
    $red = hexdec(substr($color, 1, 2));
    $green = hexdec(substr($color, 3, 2));
    $blue = hexdec(substr($color, 5, 2));
    $t = fn($x) => Str::padLeft(dechex(255 - $x), 2, '0');
    return "#" . $t($red) . $t($green) . $t($blue);
  }

  static function isGray(string $color) {
    $red = substr($color, 1, 2);
    $green = substr($color, 3, 2);
    $blue = substr($color, 5, 2);
    return $red === $green && $green === $blue;
  }
}
