<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProdukcontroller extends Controller
{
    public function fromproduk () {
        return view('Admin.pages.formproduk');
        }
}
