<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $this->call([
            quizeSeeder::class
        ]);
        $this->call([
            questionSeeder::class
        ]);
        $this->call([
            question_submissionSeeder::class
        ]);

        $this->call([
            UserSeeder::class
        ]);
        $this->call([
            userRoleSeeder::class
        ]);
    }
}
