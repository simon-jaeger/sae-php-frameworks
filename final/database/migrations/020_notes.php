<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  function up() {
    Schema::create('notes', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->text('content');
      $table->foreignId('user_id');
      $table->timestamps();
    });
  }

  function down() {
    Schema::drop('notes');
  }
};
