<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\EmployeeModel;
class Home extends BaseController
{
    public function __construct(){
        helper('html');
        helper('form');
        $this->employeeModel = new EmployeeModel();
        $this->UserModel = new UserModel();
    }
    public function index($page = 'home'){   
        $data['controller']=$this;
        $data['page'] =$page;
        if($page =="home");
        $data['total'] = number_format($this->employeeModel->countAll());
        return view('index',$data);
    }
    public function view_page($page = ''){
        if(empty($page) && !is_file(APPPATH."Views/pages/{$page}.php")){
            throw new \CodeIgniter\Exceptions\PageNotFound($page);
        }else{
            echo view("pages/{$page}");
        }
        // echo 'test';
    }
    public function modal_view_page($page = ''){
        if(empty($page) && !is_file(APPPATH."Views/modal/{$page}.php")){
            throw new \CodeIgniter\Exceptions\PageNotFound($page);
        }else{
            echo view("modal/{$page}");
        }
        // echo 'test';
    }
    public function login(){
        $data = [];
        $data['controller'] =$this;
        $data['page'] ='login';
        if($this->request->getMethod() == 'post'){
            $rules = [
                'username' => 'required',
                'password' => 'required'
            ];
            if(!$this->validate($rules)){
            $data['validation'] = $this->validator->listErrors();
            }else{
                $model = new UserModel();
                $user = $model->where('username',$this->request->getVar('username'))->first();
                $session = session();
                if(!$user){
                    $data['err_log'] = 'Incorrect Username or Password';
                }else{
                    if($user['password'] == md5($this->request->getVar('password')) ){
                        $session->setFlashdata('success','Password is correct');
                        $auth  = [];
                        $auth['id'] = $user['id'];
                        $auth['name'] = $user['name'];
                        $auth['username'] = $user['username'];
                        $auth['password'] = $user['password'];
                        $auth['is_login'] = true;
                        $session->set($auth);
                        return redirect()->to('/login');
                    }else{
                        $data['err_log'] = 'Incorrect Username or Password';
                    }
                }
            }
        }
        return view('index',$data);
    }
    public function register(){
        $data = [];
        $data['controller'] =$this;
        $data['page'] ='register';
        if($this->request->getMethod() == 'post'){
            $rules = [
                'name' => 'required',
                'username' => 'required',
                'password' => 'required',
                'confirm_password' => 'required|matches[password]',
            ];
            $errors = [
                'confirm_password'=>[
                    'matches'=>"Password does not match."
                ]
                ];
            if(!$this->validate($rules,$errors)){
            $data['validation'] = $this->validator->listErrors();
            }else{
                $model = new UserModel();
                $user = $model->where('username',$this->request->getVar('username'))->first();
                $session = session();
                if($user){
                    $data['err_log'] = 'Username already taken';
                }else{
                    $user = array();
                    $user['name'] = esc($this->request->getVar('name'));
                    $user['username'] = esc($this->request->getVar('username'));
                    $user['password'] = esc(md5($this->request->getVar('password')));
                    // print_r($user);exit;
                    $save = $model->insert($user);
                    if($save){
                        $session->setFlashdata('success','Registered Successfully');
                        return redirect()->to('/login');
                    }else{
                        $data['err_log'] = 'There\'s an error occurred while saving the data.';
                    }
                }
            }
        }
        return view('index',$data);
    }
    public function logout(){
        session()->remove(session()->get());
        session()->destroy();
        return redirect()->to('/');
    }
    public function employees(){
        $data['controller'] = $this;
        $data['page'] = 'employees';
        $data['list'] = $this->employeeModel->listAll();
        return view('index',$data);
    }
    public function save_employee(){
        return $this->employeeModel->save_data();
    }
    public function delete_employee(){
        return $this->employeeModel->delete_data();
    }
    public function employee_details($id=""){
        if(empty($id)){
            session()->setFlashdata('danger',"Employee_id is required");
            redirect()->to('/');
        }else{
            $data['controller'] = $this;
            $data['page'] = "employee_details";
            $data['id'] = $id;
            $data['details'] = $this->employeeModel->get_details($id);
            return view('index',$data);
        }
    }
    public function view_file(){
        $segments = service('uri')->getSegments();
        unset($segments[0]);
        $path = implode("/",$segments);
        if(!is_file(WRITEPATH."uploads/{$path}")){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }else{
            $file = file_get_contents(WRITEPATH."uploads/{$path}");
            $file_info = new \finfo(FILEINFO_MIME_TYPE);
            $mime_type = $file_info->buffer($file);
            $this->response
            ->setStatusCode(200)
            ->setContentType($mime_type)
            ->setBody($file)
            ->send();
        }
    }
    public function users(){
        $data['controller'] = $this;
        $data['page'] = 'users';
        $data['list'] = $this->UserModel->get()->getResultArray();
        return view('index',$data);
    }
    public function manage_account(){
        $data['controller'] = $this;
        $data['page'] = 'manage_account';
        $user = $this->UserModel->getWhere(['id'=>session()->get('id')])->getRow(0);
        $data['user'] = !is_null($user) ? (array) $user : [];
        // var_dump($data['user']);exit;
        return view('index',$data);
    }
    public function update_account(){
        $data = [];
        $data['controller'] =$this;
        $data['page'] ='manage_account';
        if($this->request->getMethod() == 'post'){
            $rules = [
                'name' => 'required',
                'username' => 'required',
                'confirm_password' => 'matches[password]',
                'old_password' => 'required',
            ];
            $errors = [
                'confirm_password'=>[
                    'matches'=>"Password does not match."
                ]
                ];
            if(!$this->validate($rules,$errors)){
            $data['validation'] = $this->validator->listErrors();
            }else{
                if(md5($this->request->getVar('old_password')) == session()->get('password')){
                    $model = new UserModel();
                    $user = $model->where('username',$this->request->getVar('username'))->where("id!=",session()->get('id'))->first();
                    $session = session();
                    if($user){
                        $data['err_log'] = 'Username already taken';
                    }else{
                        $user = array();
                        $user['name'] = esc($this->request->getVar('name'));
                        $user['username'] = esc($this->request->getVar('username'));
                        if(!empty($this->request->getVar('password')))
                        $user['password'] = esc(md5($this->request->getVar('password')));
                        $save = $model->update(['id'=>session()->get('id')],$user);
                        if($save){
                            $session->setFlashdata('success','Account Successfully Updated');
                            $user['is_login'] = true;
                            session()->set($user);
                            return redirect()->to('/manage_account');
                        }else{
                            $data['err_log'] = 'There\'s an error occurred while saving the data.';
                        }
                    }
                }else{
                    $data['err_log'] = 'Old Password is incorrect.';
                }
            }
        }
        return view('index',$data);
    }
}
