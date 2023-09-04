<?php

namespace App\Http\Controllers;

use App\Models\question_submission;
use Illuminate\Http\Request;

class submissionController extends Controller
{
    public function view(){
        $submissions= question_submission::all();
        return view('admin.submission.view',compact('submissions'));
    }
}
