<?php 	

/**
 * 	
 */
class Dashboardhome extends MY_Controller
{	
	function __construct()
	{
		parent:: __construct();
		// Jangan nyelinap ke url sebelum login sukses!
		if(! $this->session->userdata('logged_id')) 
		{
			redirect('homeloginController');
		}
	}

	public function index()
	{	
		$this->load->view('index');

	}

		public function logout()
	{
		// Hapus session dengan tambahkan input name lagi
		$this->session->unset_userdata(array(
			'id',
			'email',
		'logged_id'));

		$this->session->set_flashdata('finished', 'You have logged out. Please login again');
		redirect('homelogincontroller');
	}

}

 ?>