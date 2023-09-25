<?php

namespace App\Controllers;

use App\Models\UserModel;
class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function insert() { 
        $data=[ 
            'usser_name'=>$this->request->getvar('user_name'),
            'usser_email'=>$this->request->getvar('user_email'),
            'usser_password'=>$this->request->getvar('user_password'),
        ];
       $model= new UserModel();
       $model->insert($data);
       echo "<h1>data sent sucess....</h1>";
    }
}
