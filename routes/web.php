<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\questionController;
use App\Http\Controllers\examController;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
Route::get('/', [frontController::class, 'index'])->name('/');
Route::get('/view', [frontController::class, 'view'])->name('frontEnd.exam.view')->middleware('isstudent');
Route::get('/question/{id}', [examController::class, 'question'])->name('frontEnd.question.view');
Route::post('/store', [examController::class, 'store'])->name('frontEnd.question.store');
Route::get('/profile/{id}', [profileController::class, 'profile'])->name('frontEnd.profile.view');





// Route::get('/test', function () {

//     return view('admin.exam.question.test');
// });

// Route::post('/test_submit', function () {
//     foreach(request()->roles as $role) {
//         if($role == "teacher") {
//             $option = new option();
//             $option->f_name = request()->first_name;
//             $option->l_name = request()->last_name;
//             $option->roles = $role;
//             $option->save();
//         }else {
//             return redirect()->back();  
//         }
        
//     }
    
// })->name('test_submit');

// Route::get('/test',[QuizController::class,'examinar']);

// Route::get('/test', function () {

//         $submission = question_submission::select('quiz_id','user_id')
//                                ->groupBy('user_id','quiz_id')
//                                ->where('quiz_id',1)
//                                ->get();
//             dd($submission);

//       $submission = question_submission::select('submitted_answer','user_id','quiz_id')
//                                ->groupBy('user_id','submitted_answer','quiz_id')
//                                ->where('user_id','1')
//                                ->where('quiz_id','2')
//                                ->get();
//             dd($submission->toArray());

//     $submission = question_submission::where('submitted_answer', '=', $id)->get();
//     $questions = question::table('Answer');

//     foreach ($submission as $submissions)
//     {
//         $submissions = $submissions->submissions;
//         $questions->where('questions', '=', $submissions);

//     }

//     $results = $questions->get();


// });





// Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
// Route::group(['middleware' => 'isteacher'], function () {
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware('isteacher');

Route::prefix('quiz')->group(function () {

    Route::get('/create', [QuizController::class, 'create'])->name('admin.exam.quiz.create')->middleware('isteacher');
    Route::post('/store', [QuizController::class, 'store'])->name('admin.exam.quiz.store')->middleware('isteacher');
    Route::get('/view', [QuizController::class, 'view'])->name('admin.exam.quiz.view')->middleware('isteacher');
    Route::get('/edit/{id}', [QuizController::class, 'edit'])->name('admin.exam.quiz.edit')->middleware('isteacher');
    Route::post('/update/{id}', [QuizController::class, 'update'])->name('admin.exam.quiz.update')->middleware('isteacher');
    Route::get('/delete/{id}', [QuizController::class, 'delete'])->name('admin.exam.quiz.delete')->middleware('isteacher');
    Route::get('/details/{id}', [QuizController::class, 'details'])->name('admin.exam.quiz.details')->middleware('isteacher');
    Route::get('/examinar/{id}', [QuizController::class, 'examinar'])->name('admin.exam.quiz.examinar')->middleware('isteacher');
    // Route::get('/examinar_details/{id}', [QuizController::class, 'examinar_details'])->name('admin.exam.quiz.examinar_details')->middleware('isteacher');
    Route::get('/answer/{id}', [QuizController::class, 'answer'])->name('admin.exam.quiz.answer');

    // Route::get('/add_question/{id}', [QuizController::class, 'add_question'])->name('admin.exam.question.add_question')->middleware('isteacher');;
});

Route::prefix('exam')->group(function () {
    Route::get('/add_question', [questionController::class, 'add_question'])->name('admin.exam.question.add_question')->middleware('isteacher');
    Route::post('/store', [questionController::class, 'store'])->name('admin.exam.question.store')->middleware('isteacher');
    Route::get('/view', [questionController::class, 'view'])->name('admin.exam.question.view')->middleware('isteacher');
    Route::get('/edit/{id}', [questionController::class, 'edit'])->name('admin.exam.question.edit')->middleware('isteacher');
    Route::post('/update/{id}', [questionController::class, 'update'])->name('admin.exam.question.update')->middleware('isteacher');
    Route::get('/delete/{id}', [questionController::class, 'delete'])->name('admin.exam.question.delete')->middleware('isteacher');
});

// });
    
// );
