<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function category()
    {
        return view('admin.category');
    }

    public function seller()
    {
        return view('admin.seller');
    }

    public function product()
    {
        return view('admin.product');
    }

    public function user()
    {
        return view('admin.user');
    }

    public function report()
    {
        return view('admin.report');
    }
}
