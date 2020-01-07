<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Admin  extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'f_name', 'email', 'l_name', 'password','email_verified_at'
    ];

    protected $hidden = ['password'];


}