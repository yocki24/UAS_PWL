<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /*public function news() {
        return view ('js3.news')
        ->with('page','News')
        ->with('url','https://www.educastudio.com/news');
    }*/

    public function news() {
        return view ('news');
    }
}
