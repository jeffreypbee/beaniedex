<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('beanie_swing_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beanie_id')->constrained('beanies')->onDelete('cascade');
            $table->foreignId('swing_tag_id')->constrained('swing_tags')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beanie_swing_tag');
    }
};
