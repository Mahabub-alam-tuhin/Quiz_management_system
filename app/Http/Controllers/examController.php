<?php

namespace App\Http\Controllers;

use App\Models\question;
use App\Models\question_submission;
use Database\Seeders\question_submissionSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class examController extends Controller
{
  public $submission;
  public function question($id)
  {
    $questions = question::where('quiz_id', $id)->get();
    return view('frontEnd.question.view', compact('questions'));
  }
  public function store(Request $request)

  {
    // dd($request->all());
    foreach ($request->ques_id as $key => $ques_id) {
      $this->submission = new  question_submission();
      $this->submission->ques_id = $ques_id;
      $this->submission->quiz_id = $request->quiz_id;
      $this->submission->user_id = Auth::user()->id;
      $this->submission->submitted_answer = $request->submitted_answer[$key];
      $question = Question::find($ques_id);
      // dd($question->Answer, $request->submitted_answer[$key]);

      if ($question->Answer == $request->submitted_answer[$key]) {
        $this->submission->right_answer = 1;
      } else {
        $this->submission->right_answer = 0;
      }
      $this->submission->save();
    }
    $this->submission->save();
    $questions = Question::where('quiz_id', $request->quiz_id)
    ->with("submissions")
    ->get();

    return view('admin.exam.quiz.answer', compact('questions'));
  }
}
