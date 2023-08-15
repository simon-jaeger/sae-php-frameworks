<?php

namespace App\Sandbox;

class Rectangle {
  public $width = 0;
  public $height = 0;

  function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  }

  function circumference() {
    return 2 * $this->width + 2 * $this->height;
  }

  function area() {
    return $this->width * $this->height;
  }

  function diagonal() {
    return sqrt($this->width ** 2 + $this->height ** 2);
  }

  function isSquare() {
    return $this->width === $this->height;
  }
}
