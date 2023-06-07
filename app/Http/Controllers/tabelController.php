<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tabelController extends Controller
{
    public function tabel(){
        return view('Admin.pages.tabel');
    }
}
