<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function insert(){

		$this->form_validation->set_rules('firstname','First Name','required|alpha');
		$this->form_validation->set_rules('lastname','Last Name','required|alpha');
		$this->form_validation->set_rules('emailid','Email id','required|valid_email');
		$this->form_validation->set_rules('contactno','Contact Number','required|numeric|exact_length[10]');
		$this->form_validation->set_rules('address','Address','required');
		
		if($this->form_validation->run()){
		$fname=$this->input->post('firstname');
		$lname=$this->input->post('lastname');
		$email=$this->input->post('emailid');
		$cntno=$this->input->post('contactno');
		$adrss=$this->input->post('address');
		//loading model
		$this->load->model('Insert_Model');
		$this->Insert_Model->insertdata($fname,$lname,$email,$cntno,$adrss);
		$this->load->view('welcome_message');
		} else {
		$this->load->view('welcome_message');
		}
	}

}

