<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // --- 1. Create Admin ---
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ]
        );

        // --- 2. Create 10 regular users ---
        User::factory(10)->create();

        // --- 3. Create 5 categories ---
        $categories = ['Web Development', 'Programming', 'Productivity', 'Design', 'Tech News'];
        foreach ($categories as $cat) {
            Category::updateOrCreate(['name' => $cat]);
        }

        // --- 4. Create 20 posts with random author & category ---
        $allUsers = User::all();
        $allCategories = Category::all();

        Post::factory(20)->create()->each(function ($post) use ($allUsers, $allCategories) {
            // Random author
            $post->author = $allUsers->random()->name;

            // Assign a random category
            $post->category_id = $allCategories->random()->id;

            $post->save();
        });
    }
}
