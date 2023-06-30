<?php

use App\Models\Task;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  function up() {
    Schema::create(Task::table(), function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->boolean('done');
      $table->integer('prio');
      $table->foreignId('user_id');
      $table->timestamps();
    });
  }

  function down() {
    Schema::drop(Task::table());
  }
};
