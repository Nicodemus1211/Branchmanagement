<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarProductController extends Controller
{
    public function daftarproduct () {
        return view('Admin.pages.daftarproduct');
        }
}
