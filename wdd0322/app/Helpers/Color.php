<?php

namespace App\Helpers;

use Str;

class Color {
  const BLACK = '#000000';
  const WHITE = '#ffffff';
  const BRAND = '#ff0000'; // facebook color

  static function random() {
    return '#' . Str::padLeft(dechex(mt_rand(0, 16777215)), 6, '0');
  }

  static function invert(string $color) {
    // TODO: return inverted color (#000000 --> #ffffff)
  }

  static function isGray(string $color) {
    // TODO: return if color is a perfect gray (red, green, blue identical)
  }
}
