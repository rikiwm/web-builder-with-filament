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
        Schema::create('pages', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->string('image')->nullable();
            $table->string('layout')->nullable();
            $table->date('published_at')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_visible')->default(true);
            $table->foreignId('menu_id')->index();
            $table->foreignId('categori_id')->index();
            $table->foreignId('created_by')->index();
            $table->foreignId('parent_id')->index()->nullable()->constrained('pages')->onDelete('cascade');
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
        Schema::dropIfExists('pages');
    }
};
