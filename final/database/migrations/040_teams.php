<?php

use App\Models\Team;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  function up() {
    Schema::create(Team::table(), function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->text('desc');
      $table->timestamps();
    });

    Schema::create('team_user', function (Blueprint $table) {
      $table->id();
      $table->foreignId('team_id');
      $table->foreignId('user_id');
      $table->timestamps();
    });
  }

  function down() {
    Schema::drop(Team::table());
    Schema::drop('team_user');
  }
};
