<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProdukcontroller extends Controller
{
    public function Formproduk () {
        return view('Admin.pages.formproduk');
        }
}
