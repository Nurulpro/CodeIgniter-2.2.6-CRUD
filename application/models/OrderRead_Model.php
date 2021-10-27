<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class OrderRead_Model extends CI_Model{
public function getdata(){
$query=$this->db->select('OrderID,user_id,OrderNumber,OrderDate,ProductName	,UnitePrice,ProductQty,TotalAmount,')
		->get('orders');
		 return $query->result();
	}


}