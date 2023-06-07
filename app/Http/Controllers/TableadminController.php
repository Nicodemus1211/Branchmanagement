<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableadminController extends Controller
{
    public function tableadmin (){
        return view('Admin.pages.tableadmin');
    }
}
