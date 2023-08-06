<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminRouteController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function Sections()
    {
        return view('admin.section');
    }

    public function projects()
    {
        return view('admin.projects');
    }

    public function courses()
    {
        return view('admin.courses');
    }

    public function friends()
    {
        return view('admin.friends');
    }

    public function files()
    {
        return view('admin.files');
    }

    public function plans()
    {
        return view('admin.plans');
    }

    public function getLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

            if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){

                return redirect()->intended('admin/index');
            }

            return back()->withInput($request->only('email'));
    }
}
