<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableProductController extends Controller
{
    public function tableproduct () {
        return view('Admin.pages.tableproduct');
        }
}
