<?php

namespace App\Http\Controllers\Admin\Admin_auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin_logginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/admin/home';


    public function showLoginForm()

    {
        return view('pages.admin.admin-login');
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
