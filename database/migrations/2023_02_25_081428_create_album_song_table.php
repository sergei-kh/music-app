<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('album_song', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Album::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Song::class)->constrained()->cascadeOnDelete();
            $table->unsignedSmallInteger("index")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('album_song');
    }
};
