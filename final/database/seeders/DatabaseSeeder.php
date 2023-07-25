<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\Tag;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Hash;

// faker: https://fakerphp.github.io/formatters/text-and-paragraphs/

class DatabaseSeeder extends Seeder {
  function run() {
    $userA = User::create([
      'email' => 'amy@mailinator.com',
      'password' => Hash::make('pw'),
      'is_admin' => true,
    ]);

    $userB = User::create([
      'email' => 'ben@mailinator.com',
      'password' => Hash::make('pw'),
    ]);

    for ($i = 0; $i < 10; $i++) {
      $userA->notes()->create([
        'title' => fake()->word(),
        'content' => fake()->sentence(),
      ]);
    }
  }
}
