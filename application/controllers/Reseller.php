<?php 
/**
  * 
  */
 class Reseller extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		error_reporting(0);
 	}

 	function index()
 	{
 		$data['title'] = "HelensCloud - Reseller Web Hosting";
 		$this->template->load('_templatehome','homepage/_resellerhosting',$data);
 	}
 } ?>