<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function view(){
        $users= User::all();
        return view('admin.user.view',compact('users'));
    }
}
