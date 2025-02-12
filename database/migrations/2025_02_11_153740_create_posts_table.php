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
            $table->id();

            // to add a new column:
            // php artisan make:migration add_avatar_to_users_table

            $table->string('title');

            $table->string('slug')->unique();

            $table->longText('content');

            $table->string('category');

            $table->timestamp('published_at')->nullable();

            $table->boolean('is_active')->default(false);

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
