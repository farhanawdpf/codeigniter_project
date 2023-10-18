<?php 

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        $uri = service('uri');
        // print_r($uri->getPath());
        if(session()->get('is_login') && session()->get('id')){
            if(in_array($uri->getPath(),array('login','home/login','register','/home/register')))
                return redirect()->to('/');
        }else{
            if(!in_array($uri->getPath(),array('login','home/login','register','/home/register'))){
                return redirect()->to('/login');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}