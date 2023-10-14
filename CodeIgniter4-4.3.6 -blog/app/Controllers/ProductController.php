<?php

namespace App\Controllers;
use App\Models\ProductModel;
use App\Controllers\BaseController;

class ProductController extends BaseController
{
    private $product = '' ;
    public function __construct(){
      
        $this->product = new ProductModel();       
    }
    
    // show product list
    public function index()
    {
        $session = session(); 
        $data['products'] = $this->product->orderBy('product_id', 'DESC')->findAll();       
        return view('product',$data);
    }
    
    public function create(){
        return view('add-product');
    }
    // insert data
    public function store() {
       
        $data = [
            'product' => $this->request->getVar('product'),
            'category'  => $this->request->getVar('category'),
            'price'  => $this->request->getVar('price'),
            'sku'  => $this->request->getVar('sku'),          
            'model'  => $this->request->getVar('model'),
        ];
        
        $this->product->insert($data);    
        $session = session(); 
        $session->setFlashdata('msg', 'Product Successfully Added');   
        return $this->response->redirect(site_url('/list'));
    }
    // show product by id
    public function edit($id=null){
        $model = new ProductModel();

        $data['product'] =$model->where('product_id', $id)->first();
        return view('edit', $data);
        // echo json_encode($data['product']); 
    }
    // update product data

    public function update(){
        $productModel = new ProductModel();
        $id = $this->request->getVar('product_id');
        $data = [
            'product' => $this->request->getPost('product'),
            'category'  => $this->request->getPost('category'),
            'price'  => $this->request->getPost('price'),
            'sku'  => $this->request->getPost('sku'),
            'model'  => $this->request->getPost('model'),
        ];
        $productModel->update($id, $data);
        return $this->response->redirect(site_url('/list'));
    }

     // delete product
     public function delete($id){
        $data = new ProductModel();
        $data->delete($id);
        return $this->response->redirect(site_url('/list'));
    }   
}
