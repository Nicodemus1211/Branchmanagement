<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarKantorController extends Controller
{
    public function daftarkantor () {
        return view('Admin.pages.daftarkantor');
        }
}
