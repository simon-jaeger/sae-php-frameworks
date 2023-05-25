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
      $table->text('content')->nullable();
      $table->foreignId('user_id')->constrained();
      $table->timestamps();
    });
  }

  function down() {
    Schema::drop(Note::table());
  }
};
