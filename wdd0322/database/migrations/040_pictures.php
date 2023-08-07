<?php

use App\Models\Picture;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  function up() {
    Schema::create(Picture::table(), function (Blueprint $table) {
      $table->id();
      $table->string('file');
      $table->foreignId('user_id');
      $table->timestamps();
    });
  }

  function down() {
    Schema::dropIfExists(Picture::table());
  }
};
