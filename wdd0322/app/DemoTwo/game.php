<?php

namespace App\DemoTwo;

use App\Demo\Hero;
use App\Demo\Enemy;
use App\Demo\Sign;

$hero = new Hero();
$enemy = new Enemy();
$sign1 = new Sign('welcome to the game');
$sign2 = new Sign('press a to jump');

$hero->attack($enemy);
$enemy->attack($hero);
