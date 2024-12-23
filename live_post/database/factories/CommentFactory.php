<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * 
    
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Get the count of posts in the database
        $count = Post::query()->count();
    
        // Check if there are posts in the database
        if ($count == 0) {
            // If no posts exist, create a new post and get its ID
            $postId = Post::factory()->create()->id;
        } else {
            // If posts exist, select a random post ID
            $postId = rand(1, $count);
        }
    
        return [
            // You might want to generate some body text, either as an array or string
            'body' => $this->faker->paragraph, // Using Faker for a random paragraph
            
            'user_id' => 1,  // You can randomize this if needed, for example: User::inRandomOrder()->first()->id
            'post_id' => $postId, // Use the $postId determined above
        ];
    }
    
}
