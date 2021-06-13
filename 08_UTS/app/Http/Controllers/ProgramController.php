<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /*public function karir() {
        return view ('js3.program')
        ->with('page','Program Karir')
        ->with('url','https://www.educastudio.com/program/karir');
    }

    public function magang() {
        return view ('js3.program')
        ->with('page','Program Magang')
        ->with('url','https://www.educastudio.com/program/magang');
    }

    public function kunjunganindustri() {
        return view ('js3.program')
        ->with('page','Program Kunjungan Industri')
        ->with('url','https://www.educastudio.com/program/kunjungan-industri');
    }*/

    public function program() {
        return view ('program');
    }
}
