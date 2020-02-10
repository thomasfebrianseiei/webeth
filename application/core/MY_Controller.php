<?php 	

/**
 * 
 */
class MY_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		
		$this->load->helper(array('url','form','html', 'MY_Helper', 'text'));
		
		$this->load->database();
		
		$this->load->model('userModel');

		$this->load->library(array('session', 'form_validation', 'pagination'));
	}
}

 ?>