<?php

namespace App\Controllers;
use \App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        echo view('backend/pages/auth/register');
    }
    public function do_register()
    {
        $UserModel = new UserModel;
        $user_name = $this->request->getPost('user_name');
        $user_email = $this->request->getPost('user_email');
        $user_password = $this->request->getPost('user_password');

        $data = ['user_name'=>$user_name, 'user_email'=>$user_email, 'user_password'=>$user_password];

        $rr = $UserModel->insert( $data);

        if ( $rr) { 
            echo "user Registration is successfully";
        } else { 
            echo "error during Registration";

        }
      
    }
    
}
