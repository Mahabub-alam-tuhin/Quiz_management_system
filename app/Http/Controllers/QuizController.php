<?php

namespace App\Http\Controllers;

use App\Models\question;
use App\Models\question_submission;
use App\Models\quizes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public $create,$quiz;
    /**
     * Display a listing of the resource.
     */
    public function view()
    {
        
        return view('admin.exam.quiz.view',[
            'quize'=>quizes::all()
                ]);
    }

    /**
     * Show the form for creating a new resource.
     */
  
    public function create()
    {
        return view('admin.exam.quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $this->create = new quizes();      
        $this->create->name = $request->name;
        $this->create->Quiz = $request->Quiz;
        $this->create->date = $request->date;
        $this->create->Time = $request->Time;
        $this->create->save();
        return back()->with('message', 'info create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $quiz = quizes::find($id);
        return view('admin.exam.quiz.edit', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->quiz=quizes::find($id);
        $this->quiz->name= $request->name;
        $this->quiz->Quiz= $request->Quiz;
        $this->quiz->date= $request->date;
        $this->quiz->Time= $request->Time;

        $this->quiz->update();
        return redirect()->route('admin.exam.quiz.view');
    }

    /**
     * Remove the specified resource from storage.
     */
    
     public function delete($id)
     {
        quizes::where('id', $id)->delete();
         return redirect()->route('admin.exam.quiz.view');
     }

   

     public function details($id)
     {
        $quiz = quizes::find($id);
        $questions = question::where('quiz_id',$id)->get();
        
        return view('admin.exam.quiz.details', compact('quiz','questions'));
    }



    // public function examinar(){
    //     return question_submission::select('ques_id','quiz_id')->groupby('ques_id','quiz_id')->get();
    // }

  
    
    public function examinar($id){
   
        // $quiz = quiz::find($id);
        // $quiz_result = QuizResult::where('quiz_id', $id)->get();

        $quiz_result = DB::table('question_submissions')
        ->join('quizes', 'question_submissions.quiz_id', '=', 'quizes.id')
        ->join('questions', 'question_submissions.ques_id', '=', 'questions.id')
        ->join('users', 'question_submissions.user_id', '=', 'users.id')
        ->select(
            'quizes.id as quiz_id',
            'quizes.name as quiz_name',
            'users.id as user_id',
            'users.name as user_name',
            DB::raw('SUM(CASE WHEN question_submissions.submitted_answer = questions.Answer THEN 1 ELSE 0 END) AS marks'),
            DB::raw('SUM(CASE WHEN question_submissions.ques_Id = questions.id THEN 1 ELSE 0 END) AS questions')
        )
        ->where('question_submissions.quiz_id', $id)
        ->groupBy('quizes.id', 'quizes.name', 'users.id', 'users.name')
        ->get();

    // dd($quiz_result->toArray());

        // $quiz=quizes::where('id',$id)->find($id);
        // $submission=question_submission::join('questions','question_submissions.quiz_id','=','questions.quiz_id')
        // ->select('questions.*','question_submissions.*')
        // ->where('question_submissions.quiz_id', $id)
     
        // ->get(); 
        // dd($submission->toArray());
    //    $submission = question_submission::where('quiz_id', $id)->with('user')->get();

       return view('admin.exam.quiz.examinar', compact('quiz_result'));

    }

    // public function examinar_details($id){
    //     $quiz = quizes::find($id);
    //     $questions = question::where('quiz_id',$id)->get();
    //     return view('admin.exam.quiz.examinar_details', compact('quiz','questions'));
    // }

    public function answer($id){
      
        // $submission = question_submission::where('user_id',Auth::user()->id)->with("questions")->get();
        $questions = question::where('quiz_id',$id)->with("submissions")->get();

        //   dd($questions->toArray());
        return view('admin.exam.quiz.answer',compact('questions'));
    }


    public function add_question($id)
    {
        
       $quiz=quizes::find($id);
       return view('admin.exam.question.add_question',compact('quiz'));
    }

    
   
}
