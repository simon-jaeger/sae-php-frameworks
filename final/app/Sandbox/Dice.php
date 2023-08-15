<?php

namespace App\Sandbox;

class Dice {
  public $number = 1;

  function throw() {
    $this->number = rand(1, 6);
    print_r($this);
  }
}
