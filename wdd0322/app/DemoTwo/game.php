<?php

namespace App\DemoTwo;

use App\Demo\Hero;
use App\Demo\Enemy;
use App\Demo\Sign;

$hero = new Hero();
$enemy = new Enemy();

$hero->attack($enemy);

$sign1 = new Sign('welcome to the game');
