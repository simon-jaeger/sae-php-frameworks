<?php

namespace App\Demo;

class Sign extends Actor {
  public $msg = '';

  function __construct($msg) {
    $this->msg = $msg;
  }
}
