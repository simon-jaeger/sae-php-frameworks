<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

// faker: https://fakerphp.github.io/formatters/text-and-paragraphs/

class DatabaseSeeder extends Seeder {
  function run() {
    $userA = User::create([
      'email' => 'amy@mailinator.com',
      'password' => Hash::make('password'),
    ]);

    $userB = User::create([
      'email' => 'ben@mailinator.com',
      'password' => Hash::make('password'),
    ]);

    for ($i = 0; $i < 10; $i++) {
      $userA->notes()->create([
        'title' => fake()->word,
        'content' => fake()->sentences(4, true),
      ]);

      $userB->notes()->create([
        'title' => fake()->word,
        'content' => fake()->sentences(4, true),
      ]);
    }

  }
}
