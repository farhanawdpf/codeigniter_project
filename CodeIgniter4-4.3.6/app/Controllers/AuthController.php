<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    protected $helper = ['url', 'form'];
    public function loginForm()
    {
        $data = [ 
            'pageTitle'=>'Login',
            'validation'=>null
        ];
        return view('backend/pages/auth/login', $data);
    }
}
