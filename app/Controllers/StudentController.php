<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\StudentModel;

class StudentController extends BaseController
{
    public function index()
    {    
        $model = new StudentModel();
   
        $data['students_detail'] = $model->orderBy('id', 'DESC')->findAll();
          
        return view('student_list', $data);
    }    
  
   
    public function store()
    {  
        helper(['form', 'url']);
           
        $model = new StudentModel();
          
        $data = [
            'name' => $this->request->getVar('txtName'),
            'address'  => $this->request->getVar('txtAddress'),
            ];
        $save = $model->save($data);
        if($save != false)
        {
            $data = $model->where('id', $save)->first();
            echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
            echo json_encode(array("status" => false , 'data' => $data));
        }
    }
   
    public function edit($id = null)
    {
        
     $model = new StudentModel();
      
     $data = $model->where('id', $id)->first();
       
    if($data){
            echo json_encode(array("status" => true , 'data' => $data));
        }else{
            echo json_encode(array("status" => false));
        }
    }
   
    public function update()
    {  
   
        helper(['form', 'url']);
           
        $model = new StudentModel();
  
        $id = $this->request->getVar('hdnStudentId');
  
         $data = [
            'name' => $this->request->getVar('txtName'),
            'address'  => $this->request->getVar('txtAddress'),
            ];
  
        $update = $model->update($id,$data);
        if($update != false)
        {
            $data = $model->where('id', $id)->first();
            echo json_encode(array("status" => true , 'data' => $data));
        }
        else{
            echo json_encode(array("status" => false , 'data' => $data));
        }
    }
   
    public function delete($id = null){
        $model = new StudentModel();
        $delete = $model->where('id', $id)->delete();
        if($delete)
        {
           echo json_encode(array("status" => true));
        }else{
           echo json_encode(array("status" => false));
        }
    }
}
