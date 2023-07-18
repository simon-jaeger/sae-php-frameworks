<?php

namespace App\Demo\solution;

trait Fightable {
  public $hp = 3;

  function attack($target) {
    $target->hp -= 1;
    if (+$target->hp > 0) return $target->hp . ' hp left.';
    else return 'defeated!';
  }
}
