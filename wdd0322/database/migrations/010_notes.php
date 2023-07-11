<?php

use App\Models\Note;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  function up() {
    Schema::create(Note::table(), function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->text('content');
      $table->string('color');
      $table->string('summary');
      $table->boolean('locked')->default(false);
      $table->timestamps();
    });
  }

  function down() {
    Schema::dropIfExists(Note::table());
  }
};
