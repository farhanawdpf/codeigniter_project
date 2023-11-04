<?php
namespace App\Models;

use CodeIgniter\Model;
use App\Model\EmployeeMetaModel;

class EmployeeModel extends Model
{
    protected $db;
    protected $table = 'employee_list';
    protected $allowedFields = ['id','employee_code','fullname', 'status','employee_id'];
    function __construct(){
        $this->db = \Config\Database::connect();
        $this->session = session();
    }

    function listAll(){
        $data = [];
        $qry = $this->get()->getResultArray();
        foreach($qry as $row){
            $department = $this->db->table('employee_meta')
                                   ->select("meta_value")
                                   ->where("meta_field",'department')
                                   ->where("employee_id",$row['id'])
                                   ->get()->getRow();
            $position = $this->db->table('employee_meta')
                                   ->select("meta_value")
                                   ->where("meta_field",'position')
                                   ->where("employee_id",$row['id'])
                                   ->get()->getRow();
            $row['department'] = $department != null ? $department->meta_value : "N/A";
            $row['position'] = $position != null ? $position->meta_value : "N/A";
            $data[] = $row;
        }
        return $data;
    }
    function save_data(){
        if(empty($_POST['employee_code'])){
            while(true){
                $alpha = range('A','Z');
                $alpha =implode("",$alpha);
                $pref = substr(str_shuffle($alpha),0,3);
                $code = $pref."-".(sprintf("%'.04d",mt_rand(1,99999)));
                $count = $this->where("employee_code","{$code}")
                              ->countAllResults();
                if($count <= 0)
                break;
            }
            $_POST['employee_code'] = $code;
        }else{
            if(isset($_POST['id']) && !empty($_POST['id'])){
                $count = $this->where("employee_code","{$_POST['employee_code']}")
                              ->where("id!=","{$_POST['id']}")
                              ->countAllResults();

            }else{
                $count = $this->where("employee_code","{$_POST['employee_code']}")
                              ->countAllResults();
            }
            
            if($count > 0){
                $resp['status'] = 'failed';
                $resp['msg'] = 'Employee Code Already Exist';
                return json_encode($resp);
            }
        }
        extract($_POST);
        $data['fullname'] = ucwords("{$lastname}, {$firstname} {$middlename} {$suffix}");
        if(isset($status))
        $data['status'] = $status;
        $data['employee_code'] = $employee_code;
        if(isset($id) && !empty($id)){
            $save = $this->update(["id"=>"{$id}"],$data);
            $employee_id = $id;
        }else{
            $save = $this->save($data);
            $employee_id = $this->getInsertID();
        }
        $metaData = array();
        if($save){
            foreach($_POST as $k => $v){
                if(!is_array($_POST[$k]) && !in_array($k,array('id','fullname','status'))){
                    $metaData[] = [
                        'employee_id' => $employee_id,
                        'meta_field' => $k,
                        'meta_value' => esc($v)
                    ];
                }
            }
            if(isset($_FILES['avatar'])){
                $file = new \CodeIgniter\Files\File($_FILES['avatar']['tmp_name']);
                $base_name = $file->getBasename();
                $type = $file->getMimeType();
                $ext = $file->guessExtension();
                if(in_array($type,array("image/png","image/jpeg"))){
                    $fname = "avatar/{$employee_id}.{$ext}";
                    if(is_file(WRITEPATH."uploads/avatar/{$employee_id}.{$ext}")){
                        unlink(WRITEPATH."uploads/avatar/{$employee_id}.{$ext}");
                    }
                    $move = $file->move(WRITEPATH."uploads/avatar/","{$employee_id}.{$ext}");
                    if($move){
                        $metaData[] = [
                            'employee_id' => $employee_id,
                            'meta_field' => 'img_path',
                            'meta_value' => esc($fname)
                        ]; 
                    }
                }
            }
            if(count($metaData) > 0){
                $this->db->table('employee_meta')->where('employee_id',"$employee_id")->where('meta_field!=',"img_path")->delete();
                if(isset($move) && $move){
                    $this->db->table('employee_meta')->where('employee_id',"$employee_id")->where('meta_field',"img_path")->delete();
                }
                $saveMeta = $this->db->table('employee_meta')
                                    ->insertBatch($metaData);
                if($saveMeta){
                    $resp['status'] = 'success';
                    $resp['id'] = $employee_id;
                    if(isset($id) && !empty($id))
                    session()->setFlashdata('success',"Employee Details Successfully Updated.");
                    else
                    session()->setFlashdata('success',"New Employee Successfully Added.");
                }else{
                    $this->where('id',$employee_id)->delete();
                    $resp['status'] = 'failed';
                    $resp['msg'] = "Saving data failed. Error:".$this->db->errors();
                }
            }
        }else{
            $resp['status'] = 'failed';
            $resp['msg'] = "Saving data failed. Error:".$this->db->errors();
        }
        return json_encode($resp);
    }
    function get_details($id){
        $data = [];
        $data['main'] = $this->getWhere(['id'=>$id])->getResultArray()[0];
        $meta = $this->db->table('employee_meta')->getWhere(['employee_id'=>$id])->getResultArray();
        foreach($meta as $row){
            $data['meta'][$row['meta_field']] = $row['meta_value'];
        }
        return $data;
    }
    function delete_data(){
        extract($_POST);
        $img_path = $this->db->table('employee_meta')->select('meta_value')->getWhere(["employee_id"=>"{$id}","meta_field"=>"img_path"])->getRow(0);
        $delete = $this->where("id",$id)->delete();
        if($delete){
            $resp['status'] = 'success';
            $this->session->setFlashdata("success","Employee Successfully deleted");
            if(!is_null($img_path) && is_file(WRITEPATH."uploads/{$img_path->meta_value}")){
                unlink((WRITEPATH."uploads/{$img_path->meta_value}"));
            }
        }else{
            $resp['status'] = 'success';
            $resp['msg'] = 'An error occured while deleting the data';
            $resp['error'] = $this->error();
        }
        return json_encode($resp);
    }
}