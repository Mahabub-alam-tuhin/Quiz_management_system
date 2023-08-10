<?php

namespace App\Http\Controllers;

use App\Models\quizes;
use App\Models\question;


use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }

    public function view()
    {
       
        $quiz=quizes::all();
        return view('frontEnd.exam.view', compact('quiz'));
    }
    // $quiz = quizes::where('Quiz','Bangla')->with(['questions' => function($q) {
    //     $q->where('name', 'Bangla');
    //   }])->get();
}
