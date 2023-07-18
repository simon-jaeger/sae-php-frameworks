<?php

namespace App\Demo;

trait Fightable {
  public $hp = 5;
  public $atk = 2;

  function attack($target) {
    if (+$target->hp <= 0) return 'already defeated';
    $target->hp -= $this->atk;
    if (+$target->hp > 0) return $target->hp . ' hp left';
    else return 'defeated';
  }
}
