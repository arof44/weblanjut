<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Article;

class ManageArticleController extends Controller
{
    public function manage(){
        $article = Article::all();
        return view('managearticle',['article' => $article]);
    }
    public function add(){
        return view('addarticle');
    }
    public function create(Request $request){
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'imageurl' => $request->image
        ]);
        return redirect('/managearticle');
    }
    public function edit($id){
        $article = Article::find($id);
        return view('editarticle',['article'=>$article]);
    }
    public function update($id, Request $request){
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->imageurl = $request->image;
        $article->save();
        return redirect('/managearticle');
    }
    public function delete($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/managearticle');
    }
    public function __construct(){
        //$this->middleware('auth');
        $this->middleware(function($request, $next){
            if(Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
}
