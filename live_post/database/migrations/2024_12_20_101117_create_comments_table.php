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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->json('body')->nullable();
            
            // Explicitly define the foreign keys
            $table->foreignId('user_id')
                  ->references('id')   // Explicitly reference the 'id' column in the 'users' table
                  ->on('users')         // Specify the 'users' table
                  ->onDelete('cascade'); // On delete cascade
            
            $table->foreignId('post_id')
                  ->references('id')   // Explicitly reference the 'id' column in the 'posts' table
                  ->on('posts')         // Specify the 'posts' table
                  ->onDelete('cascade'); // On delete cascade
            
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the  migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
