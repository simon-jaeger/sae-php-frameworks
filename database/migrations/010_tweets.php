<?php

use App\Models\Tweet;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up() {
    Schema::create(Tweet::$table, function (Blueprint $table) {
      $table->id();
      $table->text('text');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::drop(Tweet::$table);
  }
};
