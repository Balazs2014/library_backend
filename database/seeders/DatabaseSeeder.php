<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Book;
use App\Models\Writer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Book::factory(20)->create();

        Writer::factory(20)->create();
    }
}
