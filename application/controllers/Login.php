<?php

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		error_reporting(0);
	}
	
	public function index()
	{
		$url = 'https://member.helenscloudhost.com/index.php?rp=/login';
		redirect($url);
	}
} ?>