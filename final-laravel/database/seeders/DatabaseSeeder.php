<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Hash;

// faker: https://fakerphp.github.io/formatters/text-and-paragraphs/

class DatabaseSeeder extends Seeder {
  function run() {
    $faker = Faker::create();

    User::create([
      'email' => 'simon.sae@mailinator.com',
      'password' => Hash::make('pw'),
    ]);

    User::create([
      'email' => 'other.sae@mailinator.com',
      'password' => Hash::make('pw'),
    ]);

    for ($i = 0; $i < 10; $i++) {
      Note::create([
        'title' => $faker->word(),
        'content' => $faker->sentence(),
        'user_id' => $faker->numberBetween(1, 2),
      ]);
    }
  }
}
