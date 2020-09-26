<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
    	return ('Selamat Datang');
    }

    public function about() {
    	return ('Nama : Muhammad Nur Arafah <br> NIM : 1931710161');
    }

    public function articles($page) {
    	return ('Halaman artikel ini dengan id ') .$page;
    }    
}
