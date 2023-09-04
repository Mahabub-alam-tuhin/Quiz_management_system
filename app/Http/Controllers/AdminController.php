<?php

namespace App\Http\Controllers;

use App\Models\question;
use App\Models\question_submission;
use App\Models\quizes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        
        $quize=quizes::all()->count();
        $questions = question::all()->count();
        $users= User::all()->count();
        $submission= question_submission::all()->count();
        $question_submissions= question_submission::all();
        $quiz_result=question_submission::all();
        // dd($question_submissions);
        return view('admin.home.home',compact('quize','questions','users','submission','question_submissions','quiz_result'));
    }

}
