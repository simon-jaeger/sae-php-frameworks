<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Hash;

// faker: https://fakerphp.github.io/formatters/text-and-paragraphs/

class DatabaseSeeder extends Seeder {
  function run() {
    User::create([
      'email' => 'simon.sae@mailinator.com',
      'password' => Hash::make('pw'),
      'is_admin' => true,
    ]);

    User::create([
      'email' => 'other.sae@mailinator.com',
      'password' => Hash::make('pw'),
    ]);

    for ($i = 0; $i < 20; $i++) {
      $userId = $i < 10 ? 1 : 2;

      Note::create([
        'title' => fake()->word(),
        'content' => fake()->sentence(),
        'user_id' => $userId,
      ]);

      Task::create([
        'name' => fake()->word(),
        'done' => fake()->boolean(),
        'prio' => fake()->numberBetween(1, 10),
        'user_id' => $userId,
      ]);
    }
  }
}
