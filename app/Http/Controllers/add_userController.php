<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class add_userController extends Controller
{
    public function create(){
        return view('admin.add_user.create');
    }
    public function store(Request $request){
        $users = new User();
        $users->user_role_id = $request->user_role_id;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->input('password'));
        $users->save();
        return back()->with('message', 'info create successfully');
       
    }
    public function view(){
        $users= User::all();
        return view('admin.add_user.view',compact('users'));
    }
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.add_user.edit', compact('users'));
    }
    public function update(Request $request, $id)
    {
        $users=User::find($id);
        $users->user_role_id = $request->user_role_id;
        $users->name= $request->name;
        $users->email= $request->email;
        $users->password = Hash::make($request->input('password'));

        $users->update();
        return redirect()->route('admin.add_user.view');
    }
    public function delete($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('admin.add_user.view');
    }

}
