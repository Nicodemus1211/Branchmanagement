<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormKantorcontroller extends Controller
{
    //
    public function formkantor () {
        return view('Admin.pages.formkantor');
        }
}
