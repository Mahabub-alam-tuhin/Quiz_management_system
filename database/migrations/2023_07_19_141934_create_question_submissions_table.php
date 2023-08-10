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
        Schema::create('question_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('quiz_id')->nullable();
            $table->string('ques_id')->nullable();
            $table->string('submitted_answer')->nullable();
            $table->string('user_id')->nullable();
            $table->string('right_answer')->nullable();
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_submissions');
    }
};
