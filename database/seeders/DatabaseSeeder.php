<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::factory()->create(['name' => 'Category 1']);
        Category::factory()->create(['name' => 'Category 2']);
        Category::factory()->create(['name' => 'Category 3']);
        Category::factory()->create(['name' => 'Category 4']);

        Status::factory()->create([
            'name' => 'Open',
            'classes' => 'bg-gray-200',
        ]);
        Status::factory()->create([
            'name' => 'Considering',
            'classes' => 'bg-purple-500 text-white',
        ]);
        Status::factory()->create([
            'name' => 'In Progress',
            'classes' => 'bg-yellow-500 text-white',
        ]);
        Status::factory()->create([
            'name' => 'Implemented',
            'classes' => 'bg-green-500 text-white',
        ]);
        Status::factory()->create([
            'name' => 'Closed',
            'classes' => 'bg-red-500 text-white',
        ]);

        Idea::factory()->count(30)->create();
    }
}
