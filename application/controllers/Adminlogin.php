<?php 
/**
  * 
  */
class Adminlogin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('_login');
	}

	function login()
	{
		$username = "helensdeveloper";
		$password = "Alnaira25102018";

		$user 	= strip_tags($this->input->post('u'));
		$pass 	= strip_tags($this->input->post('p'));

		if ($username == $user) {
			if ($password == $pass) {
				# code...
			}else{
				$url=base_url('adminlogin');
				echo $this->session->set_flashdata('msg','<span style="color: white">Password Salah</span>');
				redirect($url);
			}
		}else{
			$url=base_url('adminlogin');
			echo $this->session->set_flashdata('msg','<span style="color: white">Username Salah</span>');
			redirect($url);
		}
	}
} ?>