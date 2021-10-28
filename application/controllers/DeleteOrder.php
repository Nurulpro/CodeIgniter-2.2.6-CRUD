<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DeleteOrder extends CI_Controller{
public function index($OrderID)
{
$this->load->model('DeleteOrder_Model');
$this->DeleteOrder_Model->deleterow($OrderID);
$this->load->view('Orders');
}
}