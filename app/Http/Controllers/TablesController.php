<?php

namespace App\Http\Controllers;

class TablesController extends Controller
{
    public function index()
    {
        return view('admin.tables');
    }
}
