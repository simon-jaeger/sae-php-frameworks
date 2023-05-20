<?php

namespace Database\Seeders;

use App\Models\Tweet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  function run() {
    for ($i = 1; $i <= 10; $i++) {
      Tweet::create([
        'text' => "tweet #{$i}",
      ]);
    }
  }
}
