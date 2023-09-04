<?php

namespace App\Http\Controllers;

use App\Models\question_submission;
use App\Models\User;
use App\Models\user_quiz_submission;
use Illuminate\Http\Request;

class quizSubmittedUserController extends Controller
{
    public function view() {
        $submissions = User::where('user_role_id', 1)->whereDoesntHave('quiz', function ($query) {
            $query->whereNotIn('id', user_quiz_submission::select('quiz_id')->distinct());
        })->get();
    // dd($submissions);
        return view('admin.quizSubmittedUser.view', compact('submissions'));
    }
    
}
