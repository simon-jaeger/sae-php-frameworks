<?php

namespace App\Helpers;

use Str;

class Color {
  const BLACK = '#000000';
  const WHITE = '#ffffff';
  const BRAND = '#aabbcc';

  static function random() {
    return '#' . Str::padLeft(dechex(mt_rand(0, 16777215)), 6, '0');
  }

  // invert('#00bbff')
  static function invert(string $color) {
    $red = hexdec(substr($color, 1, 2)); // '00' --> 0
    $green = hexdec(substr($color, 3, 2)); // 'bb' --> 187
    $blue = hexdec(substr($color, 5, 2));// 'ff' --> 255
    $t = fn($x) => Str::padLeft(dechex(255 - $x), 2, '0');
    return '#' . $t($red) . $t($green) . $t($blue);
  }

  static function isGray(string $color) {
    $red = substr($color, 1, 2);
    $green = substr($color, 3, 2);
    $blue = substr($color, 5, 2);
    return $red === $blue && $blue === $green;
  }
}
