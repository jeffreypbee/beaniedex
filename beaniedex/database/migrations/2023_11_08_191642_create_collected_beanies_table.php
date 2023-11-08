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
        Schema::create('collected_beanies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('beanie_id')->constrained('beanies')->onDelete('cascade');
            $table->foreignId('swing_tag_id')->nullable()->constrained('swing_tags')->onDelete('cascade');
            $table->foreignId('tush_tag_id')->nullable()->constrained('tush_tags')->onDelete('cascade');
            $table->string('condition')->nullable();
            $table->longText('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collected_beanies');
    }
};
