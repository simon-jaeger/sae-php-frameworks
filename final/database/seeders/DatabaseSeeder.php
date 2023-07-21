<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\Team;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Hash;

// faker: https://fakerphp.github.io/formatters/text-and-paragraphs/

class DatabaseSeeder extends Seeder {
  function run() {
    $userA = User::create([
      'email' => 'simon.sae@mailinator.com',
      'password' => Hash::make('pw'),
      'is_admin' => true,
    ]);

    $userB = User::create([
      'email' => 'other.sae@mailinator.com',
      'password' => Hash::make('pw'),
    ]);

    // fixed teams
    $teamA = Team::create([
      'name' => 'alpha',
    ]);

    $teamB = Team::create([
      'name' => 'bravo',
    ]);

    $teamC = Team::create([
      'name' => 'charlie',
    ]);

//    $userA->teams()->attach($teamA->id);
//    $userB->teams()->attach([$teamB->id, $teamC->id]);

    for ($i = 0; $i < 10; $i++) {

      $userA->notes()->create([
        'title' => fake()->word(),
        'content' => fake()->sentence(),
      ]);

      $userA->tasks()->create([
        'name' => fake()->word(),
        'done' => fake()->boolean(),
        'prio' => fake()->numberBetween(1, 10),
      ]);
    }
  }
}
