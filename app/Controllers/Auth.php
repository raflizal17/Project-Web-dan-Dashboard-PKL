<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login_khusus(){
        return view('dashboard/login');
    }

    public function login_umum(){
        return view('dashboard/login_umum');
    }

    public function registration(){
        return view('dashboard/register');
    }
}