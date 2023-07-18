<?php

// remember to use run [composer dump-autoload] before first time

namespace App\Demo;

use App\Demo\solution\Enemy;
use App\Demo\solution\Hero;
use App\Demo\solution\Sign;

$h = new Hero();
$e = new Enemy();
$s = new Sign();

$h->attack($e);
