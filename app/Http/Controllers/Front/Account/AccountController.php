<?php

namespace App\Http\Controllers\Front\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function account()
    {
        return view('pages/account/account');
    }
}
