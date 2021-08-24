<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage()
    {
        return view('front/home');
    }

    public function loginPage()
    {
        return view('front/auth/login');
    }

    public function registerPage()
    {
        return view('front/auth/register');
    }
}
