<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\UserSeeder as SeedersUserSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        for($i = 1; $i<=1;$i++){
            $user = new User;
            $user->name= "Rakib";
            $user->email="Rakib@gmail.com";
            $user->user_role_id="1";
            $user->password =Hash::make('12345678');
            $user->created_at="2023-01-01 10:05"; 
            $user->save();
        }
        for($i = 1; $i<=1;$i++){
            $user = new User;
            $user->name= "sakib";
            $user->email="sakib@gmail.com";
            $user->user_role_id="2";
            $user->password =Hash::make('12345678');
            $user->created_at="2023-01-01 10:05"; 
            $user->save();
        }
        for($i = 1; $i<=1;$i++){
            $user = new User;
            $user->name= "Aakib";
            $user->email="Aakib@gmail.com";
            $user->user_role_id="1";
            $user->password = Hash::make('12345678');
            $user->created_at="2023-01-01 10:05"; 
            $user->save();
        }
        for($i = 1; $i<=1;$i++){
            $user = new User;
            $user->name= "Rashed";
            $user->email="Rashed@gmail.com";
            $user->user_role_id="1";
            $user->password =Hash::make('12345678');
            $user->created_at="2023-01-01 10:05"; 
            $user->save();
        }
    }
}
