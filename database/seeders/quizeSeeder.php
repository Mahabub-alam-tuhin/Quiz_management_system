<?php

namespace Database\Seeders;

use App\Models\quizes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
class quizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        quizes::truncate();
        // Booking::factory(10)->create();
        for($i = 1; $i<=1;$i++){
            $quize = new quizes;
            $quize->name= "Mahabub";
            $quize->Quiz="Bangla ";
            $quize->date = "2023-07-19 $i";
            $quize->Time ="10:05 $i";
            $quize->status =(1);
            $quize->created_at="2023-01-01 10:05"; 
            $quize->save();
        }
        for($i = 1; $i<=1;$i++){
            $quize = new quizes;
            $quize->name= "Sakib ";
            $quize->Quiz="English ";
            $quize->date = "2023-07-19 $i";
            $quize->Time ="10:05 $i";
            $quize->status =(1);
            $quize->created_at="2023-01-01 10:05"; 
            $quize->save();
        }
  
    }
}


