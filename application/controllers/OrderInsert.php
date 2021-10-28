<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Orderinsert extends CI_Controller {
// For data insertion
public function index(){
//Setting validation rules



$this->form_validation->set_rules('ProductName','Product Name','required|alpha');
if($this->form_validation->run()){
$user_id=$this->input->post('user_id');
$ProductName=$this->input->post('ProductName');
$UnitePrice=$this->input->post('UnitePrice');
$ProductQty=$this->input->post('ProductQty');
$TotalAmount=$this->input->post('TotalAmount');


//loading model
$this->load->model('Orderinsert_Model');
$this->Orderinsert_Model->insertdata($user_id,$ProductName,$UnitePrice,$ProductQty,$TotalAmount);
$this->load->view('orderinsert');
} else {
$this->load->view('orderinsert');
}
}





public function updatedetails(){
        //Setting validation rules
        
        
        
        $this->form_validation->set_rules('ProductName','Product Name','required|alpha');
        if($this->form_validation->run()){
        $user_id=$this->input->post('user_id');
        $ProductName=$this->input->post('ProductName');
        $UnitePrice=$this->input->post('UnitePrice');
        $ProductQty=$this->input->post('ProductQty');
        $TotalAmount=$this->input->post('TotalAmount');
        $ODID=$this->input->post('rdOerID');
        
        //loading model
        $this->load->model('Orderinsert_Model');
        $this->Orderinsert_Model->updatedetails($user_id,$ProductName,$UnitePrice,$ProductQty,$TotalAmount,$ODID);
       
      } else {
        $this->session->set_flashdata('error', 'Somthing went worng. Try again with valid details !!');
                redirect('Orders');
        }
        }
    }


 