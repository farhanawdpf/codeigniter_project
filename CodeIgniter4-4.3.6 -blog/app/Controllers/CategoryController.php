<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Controllers\BaseController;


class CategoryController extends BaseController
{
    private $category = '' ;
    public function __construct(){
      
        $this->category = new CategoryModel();       
    }
    
    // show category list
    public function index()
    {
        $session = session(); 
        $data['categories'] = $this->category->orderBy('id', 'DESC')->findAll();       
        return view('category/view-category',$data);
    }
    
    public function create(){
        return view('category/add-category');
    }
    // insert data
    public function store() {
       
        $data = [
            'name' => $this->request->getVar('name'),
        ];
        
        $this->category->insert($data);    
        $session = session(); 
        $session->setFlashdata('msg', 'Category Successfully Added');   
        return $this->response->redirect(site_url('/view-category'));
    }
    // show category by id
    public function edit($id=null){
        $model = new CategoryModel();

        $data['category'] =$model->where('id', $id)->first();
        return view('category/edit-category', $data);
        // echo json_encode($data['category']); 
    }
    // update category data

    public function update(){
        $categoryModel = new CategoryModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getPost('name'),
        ];
        $categoryModel->update($id, $data);
        return $this->response->redirect(site_url('/view-category'));
    }

     // delete category
     public function delete($id){
        $data = new CategoryModel();
        $data->delete($id);
        return $this->response->redirect(site_url('/view-category'));
    }   
}