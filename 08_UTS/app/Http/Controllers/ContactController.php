<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /*public function contact() {
        return view ('js3.contact')
        ->with('url','https://www.educastudio.com/contact-us');
    }*/

    public function contact() {
        return view ('contact');
    }
}
