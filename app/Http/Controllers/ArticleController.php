<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class ArticleController extends Controller
{
    public function index($id){
        $article = Article::find($id);
        return view('Article',['id'=>$id])->with(compact('article'));
    }

}