<?php

namespace App\Http\Controllers;

use App\Models\question;
use App\Models\question_submission;
use App\Models\quizes;
use App\Models\User;
use App\Models\user_quiz_submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class leadbordController extends Controller
{
    public function examinars()
    {

        // $quiz = quiz::find($id);
        // $quiz_result = QuizResult::where('quiz_id', $id)->get();
        // $submission=question_submission::sum('right_answer');
        // $quiz_result = DB::table('users')
        // ->join('quizes', 'users.quiz_id', '=', 'quizes.id')
        // ->join('questions', 'users.ques_id', '=', 'questions.id')
        // ->join('question_submission', 'users.user_id', '=', 'users.id')
        // ->select(
        //     'quizes.id as quiz_id',
        //     'quizes.name as quiz_name',
        //     'question_submission.id as user_id',
        //     'users.name as user_name',
        //     DB::raw('SUM(CASE WHEN question_submission.submitted_answer = questions.Answer THEN 1 ELSE 0 END) AS marks'),
        //     DB::raw('SUM(CASE WHEN question_submission.ques_Id = questions.id THEN 1 ELSE 0 END) AS questions')
        // )
        // // ->where('users.id',)->sum('right_answer')
        // ->groupBy('quizes.id', 'quizes.name', 'question_submissions.id', 'question_submissions.name')
        // ->get();
        //    dd($quiz_result);


        // dd($quiz_result);
        $questions = question::all()->count();
        $quiz_result = [];
        $quiz_users = question_submission::get();
        $uniqueEntries = [];

        foreach ($quiz_users as $quiz_user) {
            $user = User::find($quiz_user->user_id);
            $quiz = quizes::find($quiz_user->quiz_id);
        
            $key = $user->name . '-' . $quiz->Quiz;
        
            if (!isset($uniqueEntries[$key])) {
                $temp_array = [
                    'user_name' => $user->name,
                    'quiz_name' => $quiz->Quiz,
                    'total_number' => question_submission::where('user_id', $user->id)->sum('right_answer'),
                    'teacher_name' => $quiz->name,
                ];
        
                $uniqueEntries[$key] = $temp_array;
            }
        }
        
        $quiz_result = array_values($uniqueEntries);
        

        return view('admin.leaderbord.view', compact('quiz_result','questions'));
    }
}
