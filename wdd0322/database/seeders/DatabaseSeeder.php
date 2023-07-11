<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Seeder;

// faker: https://fakerphp.github.io/formatters/text-and-paragraphs/

class DatabaseSeeder extends Seeder {
  function run() {

    // seed notes
    for ($i = 0; $i < 1; $i++) {
      Note::create([
        'title' => fake()->word(),
        'content' => fake()->sentences(4, true),
        'color' => fake()->hexColor(),
        'summary' => '...',
      ]);
    }

    // seed your custom entity...
    // ...

  }
}
