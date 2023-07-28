<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// pivot table
return new class extends Migration {
  function up() {
    Schema::create('note_tag', function (Blueprint $table) {
      $table->id();
      $table->foreignId('note_id')->constrained()->onDelete('cascade');
      $table->foreignId('tag_id')->constrained()->onDelete('cascade');
      $table->timestamps();
    });
  }

  function down() {
    Schema::drop('note_tag');
  }
};
