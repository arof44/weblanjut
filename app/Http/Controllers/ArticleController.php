<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;

class ArticleController extends Controller
{
    public function article($id){
    	$hasil = Article::find($id);
    	return view('indexHome',['hasil'=>$hasil]);
    	/*return view ('Article', compact('id'))
    }*/
}
