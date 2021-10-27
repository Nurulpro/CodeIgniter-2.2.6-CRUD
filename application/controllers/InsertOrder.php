<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class InsertOrder extends CI_Controller {
// For data insertion
public function index(){
//Setting validation rules
$this->form_validation->set_rules('user_id','User ID','required|alpha');
$this->form_validation->set_rules('OrderNumber','Order Number	','required|alpha');
$this->form_validation->set_rules('OrderDate','Order Date','required|alpha');
$this->form_validation->set_rules('ProductName','Product Name','required|alpha');
$this->form_validation->set_rules('address','Address','required');

if($this->form_validation->run()){
$user_id=$this->input->post('user_id');
$OrderNumber=$this->input->post('OrderNumber');
$OrderDate=$this->input->post('OrderDate');
$ProductName=$this->input->post('ProductName');
$UnitePrice=$this->input->post('UnitePrice');
$ProductQty=$this->input->post('ProductQty');
$TotalAmount=$this->input->post('TotalAmount');


//loading model
$this->load->model('OrderInsert_Model');
$this->OrderInsert_Model->insertdata($user_id,$OrderNumber,$OrderDate,$ProductName,$UnitePrice,$ProductQty,$TotalAmount);
$this->load->view('InsertOrder');
} else {
$this->load->view('InsertOrder');
}
}
}
