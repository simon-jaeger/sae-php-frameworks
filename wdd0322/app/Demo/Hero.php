<?php

namespace App\Demo;

class Hero extends Actor {
  use Fightable;
  public $name = '...';

  function __construct() {
    $this->atk = 2;
  }
}
