<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /*public function edugames() {
        return view ('js3.product')
        ->with('page','Marbel Edu Games')
        ->with('url','https://www.educastudio.com/category/marbel-edu-games');
    }

    public function friendskidsgames() {
        return view ('js3.product')
        ->with('page','Marbel and Friends Kids Games')
        ->with('url','https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }*/

    public function product() {
        return view ('products');
    }
}
