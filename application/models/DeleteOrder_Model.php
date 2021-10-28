<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DeleteOrder_Model extends CI_Model {
public function deleterow($OrderID){
$sql_query=$this->db->where('OrderID', $OrderID)
                ->delete('orders');
           if($sql_query){
$this->session->set_flashdata('success', 'Record delete successfully');
		redirect('orders');
	}
	else{
		$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
		redirect('orders');
	}
}
}