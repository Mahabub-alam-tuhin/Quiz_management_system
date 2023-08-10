<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentControler extends Controller
{
    public function studentLogin()
    {
        return view('frontEnd.student.login');
    }
}
