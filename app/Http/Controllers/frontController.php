<?php

namespace App\Http\Controllers;

use App\Models\quizes;
use App\Models\question;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class frontController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }

    public function view()
    {
        $users=Auth::user();
        $quiz=quizes::whereNotExists(
            function($query) use($users) {
              $query->from('user_quiz_submissions')
                    ->where('user_id', $users->id)
                    ->whereColumn('quizes.id','user_quiz_submissions.quiz_id');
            })->get();
        return view('frontEnd.exam.view', compact('quiz'));
    }
    // $quiz = quizes::where('Quiz','Bangla')->with(['questions' => function($q) {
    //     $q->where('name', 'Bangla');
    //   }])->get();
}
