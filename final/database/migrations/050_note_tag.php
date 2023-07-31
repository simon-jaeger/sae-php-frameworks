<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// pivot table
return new class extends Migration {
  function up() {
    Schema::create('note_tag', function (Blueprint $table) {
      $table->foreignId('note_id')->constrained()->onDelete('cascade');
      $table->foreignId('tag_id')->constrained()->onDelete('cascade');

      $table->primary(['note_id', 'tag_id']); // composite primary key
    });
  }

  function down() {
    Schema::drop('note_tag');
  }
};
