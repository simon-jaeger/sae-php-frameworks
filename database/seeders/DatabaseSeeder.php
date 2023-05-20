<?php

namespace Database\Seeders;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Database\Seeder;
use Hash;

class DatabaseSeeder extends Seeder {
  function run() {
    User::create([
      'email' => 'simon.sae@mailinator.com',
      'password' => Hash::make('pw'),
    ]);

    for ($i = 1; $i <= 3; $i++) {
      Tweet::create([
        'text' => "tweet #{$i}",
      ]);
    }
  }
}
