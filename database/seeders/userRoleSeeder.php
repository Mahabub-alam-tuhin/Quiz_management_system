<?php

namespace Database\Seeders;

use App\Models\userRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        userRole::truncate();

        userRole::create([
          'name'=>'student',
          'role_id'=>'1',
        ]);

        userRole::create([
            'name'=>'Teacher',
            'role_id'=>'2',
          ]);
    }
}
