<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.page.home.index');
    }

    public function about()
    {
        return view('admin.page.about.index');
    }
}
