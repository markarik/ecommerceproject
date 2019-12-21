<?php

namespace App\Http\Controllers\Admin\Admin_auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class Admin_forgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

}
