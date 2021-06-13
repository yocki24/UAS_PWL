<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return '1941720144, Zidan Shabira As Sidiq';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id=' .$id=1;
    }
}