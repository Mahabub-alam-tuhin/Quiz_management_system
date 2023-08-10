<?php

namespace App\Http\Controllers;

use App\Models\register;
use App\Models\Student;
use App\Models\User;
use App\Models\userRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class loginControler extends Controller
 {
    
    // public function register(){
        
    //     $register=userRole::get();
    //     return view('frontEnd.student.register',compact("register"));
    // }
 
    // public function saveregister(Request $request)
    // {
 
    //     $student = new User();
    //     $student->name = $request->name;
    //     $student->email = $request->email;
    //     $student->userRole = $request->userRole;
    //     $student->password = bcrypt($request->password);
    //     $student->save();
       
    //     return back();
    // }

    // public function login(){
    //     return view('frontEnd.student.login');
    // }
    
    // public function loginCheck(Request $request)
    // {
    //     $studentInfo = User::where('email', $request->email)
    //         ->first();
    //     if ($studentInfo) {
    //         $expass = $studentInfo->password;
    //         if (password_verify($request->password, $expass)) {
    //             Session::put('studentId', $studentInfo->id);
    //             Session::put('studentName', $studentInfo->name);
    //             return redirect('/');
    //         } else {
    //             return back()->with('message', 'invalid password');
    //         }
    //     } else {
    //         return back()->with('message', 'invalid user Name');
    //     }
    // }
    
   }
