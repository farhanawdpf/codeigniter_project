<?php

namespace App\Controllers;
use \App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        echo view('backend/pages/auth/login');
    }

    public function do_login () { 
        $UserModel = new userModel();
        $user_email = $this->request->getPost('user_email');
        $user_password = $this->request->getPost('user_password');
       $result = $UserModel->where('user_email',$user_email)->first(); 
    //    print_r( $result);

    if( $result->id > 0) { 
        if (password_verify($user_password, $result->user_password)) { 
            $this->session->set("user", $result);
            return redirect()->to('/dashboard');
        }  else { 
            echo 'invalid email or password';
        }
    }
    else { 
        echo 'invalid email or password';
    }
    }

    public function logout () { 
        session_destroy ();
    }
}
