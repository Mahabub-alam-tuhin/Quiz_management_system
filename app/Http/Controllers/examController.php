<?php

namespace App\Http\Controllers;

use App\Models\question;
use App\Models\question_submission;
use App\Models\user_quiz_submission;
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
    $quiz_submissions = new user_quiz_submission();
    $quiz_submissions->quiz_id = $request->quiz_id;
    $quiz_submissions->user_id = Auth::user()->id;
    $quiz_submissions->save();

    foreach ($request->ques_id as $key => $ques_id) {
      $submission = new  question_submission();
      $submission->ques_id = $ques_id;
      $submission->quiz_id = $request->quiz_id;
      $submission->user_id = Auth::user()->id;
      // $this->submission->submitted_answer = $request->submitted_answer[$key];
      $question = Question::find($ques_id);
      // dump($question);
      if ($question->multiple == '1') {
        $answer_array = [];
        // dd(json_encode($request->submitted_answer));
        $decoded = json_decode($question->Answer);
        foreach ($request->submitted_answer as $question_id => $values) {
          if ($question_id == $question->id) {
            if (in_array($decoded, $values)) {
              $submission->right_answer = 1;
              $submission->submitted_answer = json_encode($values);
            } else {
              $submission->right_answer = 0;
              $submission->submitted_answer = json_encode($values);
            }
            $submission->save();
          }
        }


        // $this->submission->submitted_answer = json_encode($answer_array);
        // $this->submission->save();
      } else {

        foreach ($request->submitted_answer as $question_id => $values) {
          if ($question_id == $question->id) {
            if($question->Answer == $values[0]) {
              $submission->right_answer = 1;
              $submission->submitted_answer = $values[0];

            }else {
              $submission->right_answer = 0;
              $submission->submitted_answer = $values[0];
            }
            $submission->save();
          }
        }

        // $this->submission->submitted_answer = $request->submitted_answer[$key];
        // if ($question->Answer == $request->submitted_answer[$key]) {
        //   $this->submission->right_answer = 1;
        // } else {
        //   $this->submission->right_answer = 0;
        // }
        // $this->submission->save();
      }
      // $this->submission->save();
      $questions = Question::where('quiz_id', $request->quiz_id)
        ->with("submissions")
        ->get();
    }
    return view('admin.exam.quiz.answer', compact('questions'));
  }
}
