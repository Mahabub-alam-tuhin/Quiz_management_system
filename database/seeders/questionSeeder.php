<?php

namespace Database\Seeders;

use App\Models\question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class questionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            question::truncate();
            // Booking::factory(10)->create();
            for($i = 1; $i<=1;$i++){
                $questions = new question;
                $questions->quiz_id= "1";
                $questions->name= "Bangla";
                $questions->Question=" বাংলাদেশের রাজধানী কোনটি?$i ";
                $questions->option_1 = " ঢাকা";
                $questions->option_2 = "চট্টগ্রাম";
                $questions->option_3 = "খুলনা";
                $questions->option_4 = "রাজশাহী";
                $questions->Answer ="ঢাকা";
                $questions->status =(1);
                $questions->save();
            }
            for($i = 1; $i<=1;$i++){
                $questions = new question;
                $questions->quiz_id= "1";
                $questions->name= "Bangla";
                $questions->Question=" বাংলাদেশের জাতীয় সংসদে সদস্য নির্বাচন কখন অনুষ্ঠিত হয়?";
                $questions->option_1 = " প্রতি ৫ বছরে একবার";
                $questions->option_2 = "প্রতি ৪ বছরে একবার";
                $questions->option_3 = "প্রতি ৩ বছরে একবার";
                $questions->option_4 = "প্রতি ২ বছরে একবার";
                $questions->Answer ="প্রতি ৫ বছরে একবার";
                $questions->status =(1);
                $questions->save();
            }
            for($i = 1; $i<=1;$i++){
                $questions = new question;
                $questions->quiz_id= "1";
                $questions->name= "Bangla";
                $questions->Question=" বাংলাদেশের প্রথম উপত্যকা কোনটি";
                $questions->option_1 = "শাপলা";
                $questions->option_2 = "বিলতা";
                $questions->option_3 = "সুরজা";
                $questions->option_4 = "পদ্মা";
                $questions->Answer ="পদ্মা";
                $questions->status =(1);
                $questions->save();
            }
             for($i = 1; $i<=1;$i++){
                $questions = new question;
                $questions->quiz_id= "1";
                $questions->name= "Bangla";
                $questions->Question=" বাংলাদেশের জাতীয় ফুল কোনটি";
                $questions->option_1 = "গোলাপ";
                $questions->option_2 = "শাপলা";
                $questions->option_3 = "জবা";
                $questions->option_4 = "কৃষ্ণচুড়া";
                $questions->Answer ="শাপলা";
                $questions->status =(1);
                $questions->save();
            }
            for($i = 1; $i<=1;$i++){
                $questions = new question;
                $questions->quiz_id= "2";
                $questions->name= "English";
                $questions->Question=" What is the capital of France?";
                $questions->option_1 = "Rome";
                $questions->option_2 = "Paris";
                $questions->option_3 = "London";
                $questions->option_4 = "Berlin";
                $questions->Answer ="Paris";
                $questions->status =(1);
                $questions->save();
            }
            for($i = 1; $i<=1;$i++){
                $questions = new question;
                $questions->quiz_id= "2";
                $questions->name= "English";
                $questions->Question=" Which planet is known as the Red Planet?";
                $questions->option_1 = "Mars";
                $questions->option_2 = "Venus";
                $questions->option_3 = "Jupiter";
                $questions->option_4 = "Saturn";
                $questions->Answer ="Venus";
                $questions->status =(1);
                $questions->save();
            }
            for($i = 1; $i<=1;$i++){
                $questions = new question;
                $questions->quiz_id= "2";
                $questions->name= "English";
                $questions->Question=" Who wrote the play Romeo and Juliet";
                $questions->option_1 = "William Shakespeare";
                $questions->option_2 = "Charles Dickens";
                $questions->option_3 = "Jane Austen";
                $questions->option_4 = "Mark Twain";
                $questions->Answer ="William Shakespeare";
                $questions->status =(1);
                $questions->save();
            }
            for($i = 1; $i<=1;$i++){
                $questions = new question;
                $questions->quiz_id= "2";
                $questions->name= "English";
                $questions->Question=" What is the chemical symbol for water";
                $questions->option_1 = "O2";
                $questions->option_2 = "H2O";
                $questions->option_3 = "CO2";
                $questions->option_4 = "N2";
                $questions->Answer ="H2O";
                $questions->status =(1);
                $questions->save();
            }

    }
    }
}
 