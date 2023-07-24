<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Seeder;

// faker: https://fakerphp.github.io/formatters/text-and-paragraphs/

class DatabaseSeeder extends Seeder {
  function run() {

    // seed notes
    for ($i = 0; $i < 10; $i++) {
      Note::create([
        'title' => fake()->word(),
        'content' => fake()->sentences(4, true),
        'user_id' => fake()->numberBetween(1,2),
      ]);
    }
  }
}
