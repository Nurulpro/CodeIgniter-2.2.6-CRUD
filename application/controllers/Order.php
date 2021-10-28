<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
		public function index(){
            //loading model
            $this->load->model('OrderRead_Model');
            $results=$this->OrderRead_Model->getdata();
            // Passing values to view
            $this->load->view('Orderread',['result'=>$results]);
            }


        // for particular recod
public function getdetails($ODID)
{
//loading model
$this->load->model('OrderRead_Model');
$reslt=$this->OrderRead_Model->getuserdetail($ODID);
// Passing Values to update view
$this->load->view('UpdateOrder',['row'=>$reslt]);
}
	}






