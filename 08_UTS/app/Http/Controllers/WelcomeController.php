<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return view('coba.hello', ['nim' => '1941720144 dari welcome controller']);
    }
}
