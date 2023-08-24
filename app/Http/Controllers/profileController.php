<?php

namespace App\Http\Controllers;

use App\Models\question;
use App\Models\question_submission;
use App\Models\quizes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class profileController extends Controller
{
  public function profile($id)
  {
      //function_body
      $user_id = Auth::user()->id;

      $quiz_result = DB::table('question_submissions')
      ->join('quizes', 'question_submissions.quiz_id', '=', 'quizes.id')
      ->join('questions', 'question_submissions.ques_id', '=', 'questions.id')
      ->join('users', 'question_submissions.user_id', '=', 'users.id')
      ->select(
          'quizes.id as quiz_id',
          'quizes.name as quiz_name',
          'quizes.Quiz as quiz_Quiz',
          'users.id as user_id',
          'users.name as user_name',
          DB::raw('SUM(CASE WHEN question_submissions.submitted_answer = questions.Answer THEN 1 ELSE 0 END) AS marks'),
          DB::raw('SUM(CASE WHEN question_submissions.ques_Id = questions.id THEN 1 ELSE 0 END) AS questions')
      )
      ->where('user_id', $user_id)
      ->groupBy('quizes.id', 'quizes.name','quizes.Quiz', 'users.id', 'users.name')
      ->get();
      //  dd($quiz_result);

      return view('frontEnd.profile.view', compact('quiz_result'));
  }
}
