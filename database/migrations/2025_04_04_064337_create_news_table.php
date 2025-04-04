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
        if (!Schema::hasTable('newstable')) {
            Schema::create('newstable', function (Blueprint $table) {
                $table->id(); // Auto-increment ID
                $table->string('title'); // News headline
                $table->string('slug')->unique(); // SEO-friendly URL
                $table->longText('content'); // Full news article
                $table->text('summary'); // Short description
                $table->string('image_url')->nullable(); // Image link
                $table->string('video_url')->nullable(); // Video link (optional)
                $table->enum('category', ['sports', 'politics', 'entertainment', 'technology', 'science']); // News category
                $table->string('source_name'); // Source of the news
                $table->string('source_url'); // URL to original article
                $table->timestamp('published_at')->nullable(); // Date when published
                $table->integer('views')->default(0); // Track views
                $table->enum('status', ['draft', 'published', 'archived'])->default('draft'); // News status
                $table->timestamps(); // Created_at & Updated_at
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newstable');
    }
};
