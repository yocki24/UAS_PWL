<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        return 'Artikel Controller';
    }

    public function about() {
        return 'Belum ada Isi';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id=' .$id=4;
    }
}
