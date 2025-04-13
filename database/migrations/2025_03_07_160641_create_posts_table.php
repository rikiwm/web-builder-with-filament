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
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->primary();
            $table->foreignId('menu_id')->index();
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->string('slug');
            $table->text('content');
            $table->string('image')->nullable();
            $table->date('published_at')->nullable();
            $table->boolean('is_active')->default(true)->nullable();
            $table->boolean('is_featured')->default(false)->nullable();
            $table->date('end_featured_date')->nullable();
            $table->foreignId('categori_id')->index();
            $table->foreignId('created_by')->index()->nullable();
            $table->integer('visitor')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
