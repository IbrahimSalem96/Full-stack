<?php

namespace App\Http\Controllers\Site;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class RouteSiteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function category()
    {
        return view('category');
    }

    public function details()
    {
        return view('details');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function shopping()
    {
        return view('shopping');
    }

    public function confirmation()
    {
        return view('confirmation');
    }

    public function blog()
    {
        return view('blog');
    }

    public function loginBlog()
    {
        return view('auth.login');
    }

    public function loginuser()
    {
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.register');
    }

    public function tracking()
    {
        return view('tracking');
    }

    public function contact()
    {
        return view('contact');
    }
}
