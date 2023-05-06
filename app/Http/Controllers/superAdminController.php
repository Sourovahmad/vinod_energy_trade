<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class superAdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }
}
