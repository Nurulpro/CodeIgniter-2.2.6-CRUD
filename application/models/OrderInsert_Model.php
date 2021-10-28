<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Orderinsert_Model extends CI_Model {
public function insertdata($user_id,$ProductName,$UnitePrice,$ProductQty,$TotalAmount){
$data=array(
			'user_id'=>$user_id,
		     'ProductName'=>$ProductName,
			'UnitePrice'=>$UnitePrice,
            'ProductQty	'=>$ProductQty,
            'TotalAmount'=>$TotalAmount
            
		);
$sql_query=$this->db->insert('orders',$data);
if($sql_query){
$this->session->set_flashdata('success', 'Order Create successful');
		redirect('orders');
	}
	else{
		$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
		redirect('orders');
	}


}


public function updatedetails($user_id,$ProductName,$UnitePrice,$ProductQty,$TotalAmount,$OrderID){
	$data=array(
				'user_id'=>$user_id,
				 'ProductName'=>$ProductName,
				'UnitePrice'=>$UnitePrice,
				'ProductQty	'=>$ProductQty,
				'TotalAmount'=>$TotalAmount
				
			);
			$sql_query=$this->db->where('OrderID', $OrderID)
			->update('orders', $data);
	   if($sql_query){
$this->session->set_flashdata('success', 'Record updated successful');
	redirect('orders');
}
else{
	$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
	redirect('orders');
}
	
	
	}
    
	}