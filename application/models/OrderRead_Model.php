<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class OrderRead_Model extends CI_Model{
public function getdata(){
$query=$this->db->select('OrderID,user_id,OrderNumber,OrderDate,ProductName	,UnitePrice,ProductQty,TotalAmount,')
		->get('orders');
		 return $query->result();
	}


	public function getuserdetail($ODID){
		$ret=$this->db->select('user_id,ProductName,UnitePrice,ProductQty,TotalAmount,OrderID')
		              ->where('OrderID',$ODID)
		              ->get('orders');
		        return $ret->row();
	}

}



