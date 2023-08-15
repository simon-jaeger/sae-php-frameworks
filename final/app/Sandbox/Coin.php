<?php

namespace App\Sandbox;

class Coin {
  public $heads = true;

  function flip() {
    $this->heads = rand(0, 1) === 1;
    print_r($this);
  }
}
