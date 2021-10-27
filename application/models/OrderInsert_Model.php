<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class OrderInsert_Model extends CI_Model {
public function insertdata($user_id,$OrderNumber,$OrderDate,$ProductName,$UnitePrice,$ProductQty,$TotalAmount){
$data=array(
			'user_id'=>$user_id,
			'OrderNumber'=>$OrderNumber,
			'OrderDate'=>$OrderDate,
			'ProductName'=>$ProductName,
			'UnitePrice'=>$UnitePrice,
            'ProductQty	'=>$ProductQty,
            'TotalAmount'=>$TotalAmount
            
		);
$sql_query=$this->db->insert('orders',$data);
if($sql_query){
$this->session->set_flashdata('success', 'Order Create successful');
		redirect('read');
	}
	else{
		$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
		redirect('read');
	}


}
    
	}