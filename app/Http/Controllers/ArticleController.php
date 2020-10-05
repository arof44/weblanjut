<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;
class ArticleController extends Controller
{
    public function index($id){
        $article = Article::find($id);
        return view('Article', ['id'=>$id])->with(compact('article'));
    
    }
}
    /*public function index1()
    {
        return view('Article.Article1');
    }

    public function index2()
    {
        return view('Article.Article2');
    }

    public function index3()
    {
        return view('Article.Article1');
    }*/