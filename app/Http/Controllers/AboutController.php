<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Cache;

class AboutController extends Controller
{
    /*public function index(){
        return view('About');
    }*/

    public function comment(){
        Cache::remember('comment', 5, function(){
            return Comment::all();

    });
        $comment = Cache::get('comment');
        return view('about')->with(compact('comment'));
    }

    /**public function create(Request $request){
        Comment::create([
            'name' => $request->name,
            'content' => $request->content,
        ]);
        return redirect('/about');
    }**/

    public function __construct(){
        $this->middleware('auth');
    }
}
