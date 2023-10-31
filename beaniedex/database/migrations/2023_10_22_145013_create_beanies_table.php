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
        Schema::create('beanies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('product_line_id')->constrained()->onDelete('cascade')->nullable();
            $table->string('species')->nullable();
            $table->date('birthday')->nullable();
            $table->date('release_date')->nullable();
            $table->date('retired_date')->nullable();
            $table->longtext('poem')->nullable();
            $table->longtext('notes')->nullable();
            $table->string('image')->nullable();
            $table->string('number')->nullable();
            $table->string('version')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beanies');
    }
};
