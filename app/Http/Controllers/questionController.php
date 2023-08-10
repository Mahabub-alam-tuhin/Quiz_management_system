<?php

namespace App\Http\Controllers;

use App\Models\quizes;
use App\Models\option;
use App\Models\question;


use Illuminate\Http\Request;

class questionController extends Controller
{
    public $create, $questions;
    public function view($id)
    {
       
        $questions = question::where('quiz_id', $id)->with("quiz")->get();
        return view('admin.exam.question.view', compact('questions'));
    }
    public function store(Request $request)

    {
        
        $this->create = new question();
        $this->create->quiz_id = $request->quiz_id;
        $this->create->name = $request->name;
        $this->create->Question = $request->Question;
        $this->create->option_1 = $request->option_1;
        $this->create->option_2 = $request->option_2;
        $this->create->option_3 = $request->option_3;
        $this->create->option_4 = $request->option_4;
        $this->create->Answer = $request->Answer;
        $this->create->save();

        $this->create->save();
        return back()->with('message', 'info create successfully');
    }
    public function edit($id)
    {
        $questions = question::find($id);
        return view('admin.exam.question.edit', compact('questions'));
    }
    public function update(Request $request, $id)
    {
        $question = question::find($id); // Note: Use singular 'Question' for the model class name
        //   dd( $question );
        $question->quiz_id = $request->quiz_id;
        $question->name = $request->name;
        $question->Question = $request->Question;
        $question->option_1 = $request->option_1;
        $question->option_2 = $request->option_2;
        $question->option_3 = $request->option_3;
        $question->option_4 = $request->option_4;
        $question->Answer = $request->Answer;

        $question->save(); // Use 'save()' to persist changes
       
        return redirect()->back();
    }

    public function delete($id)
    {    
       
        question::where('id', $id)->delete();
        return redirect()->route('admin.exam.question.view', $id);
    }
}
