<?php

use App\Models\Tag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  function up() {
    Schema::create(Tag::table(), function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->foreignId('user_id');
      $table->timestamps();
    });

    // pivot
    Schema::create('note_tag', function (Blueprint $table) {
      $table->id();
      $table->foreignId('note_id')->constrained()->onDelete('cascade');
      $table->foreignId('tag_id')->constrained()->onDelete('cascade');
      $table->timestamps();
    });
  }

  function down() {
    Schema::drop(Tag::table());
    Schema::drop('note_tag'); // pivot
  }
};
