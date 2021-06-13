<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /*public function index() {
        return 'Halooo!!!';
    }

    public function about() {
        return 'Nama (NIM) = Zidan Shabira As Sidiq (1941720144)';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id=' .$id=3;
    }*/

    /*public function about() {
        return view ('js3.about')
        ->with('url','https://www.educastudio.com/about-us');
    }*/

    public function about() {
        return view ('about');
    }
}
