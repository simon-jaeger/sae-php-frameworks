<?php

use App\Models\Tweet;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::create(app(Tweet::class)->getTable(), function (Blueprint $table) {
      $table->id();
      $table->text('text');
      $table->timestamps();
    });
  }

  public function down(): void {
    Schema::drop(app(Tweet::class)->getTable());
  }
};
