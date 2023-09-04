<?php

namespace App\Http\Controllers;

use App\Models\user_role;
use App\Models\userRole;
use Illuminate\Http\Request;

class add_roleController extends Controller
{
    public function create(){
        return view('admin.add_role.create');
    }
    public function store(Request $request){
        $users = new userRole();
        $users->role_id = $request->role_id;
        $users->name = $request->name;
        $users->save();
        return back()->with('message', 'info create successfully');
    }
    public function view(){
        $users= userRole::all();
        return view('admin.add_role.view',compact('users'));
    }
}
