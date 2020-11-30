<?php 
/**
  * 
  */
 class Home extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	function index()
 	{
 		$data['title'] = "HelensCloud - Unlimited Web Hosting";
 		$this->template->load('_templatehome','homepage/_home',$data);
 	}
 } ?>