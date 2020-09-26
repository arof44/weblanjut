<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index() {
    	$hasil = Article::all();
    	return view('Home.HomeIndex',['hasil'=>$hasil]);
    	//return view('Home.Homeindex');    	
    }

    public function __invoke(Request $request){
		// "\app\Article == model"
		//gte = menampilkan semua data di database, first = 1 date
		$articles =\App\Article::all();
		$value = Cache::rememberForever('articles', function(){
			return \App\Article::all();
	});
		$page='Article';
		return view('layout.article',[
			'articles'=> $articles,
			'halaman' => $page
			//halaman dipanggil di view
		])
	}
    
}