<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\User;

class UserController extends Controller
{
	public function manageuser(){
		$user = User::all();
		return view('manageuser',['user' => $user]);
	}
	public function add(){
		return view('adduser');
	}
	public function create(Request $request){
		User::create([
			'name' => $request->name,
			'email' => $request->email,
			'password' => \Hash::make($request->password),
			'roles' => 'User'
		]);
		return redirect('/manageuser');
	}
	public function edit($id){
		$user = User::find($id);
		return view('edituser',['user'=>$user]);
	}
	public function update($id, Request $request){
		$user = User::find($id);
		$user->name = $request->name;
		$user->email = $request->email;
		$user->roles = $request->roles;
		$user->save();
		return redirect('/manageuser');
	}
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/manageuser');
    }
}
