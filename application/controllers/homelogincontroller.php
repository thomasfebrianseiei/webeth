<?php 

	/**
	 * 
	 */
	class Homelogincontroller extends MY_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			//if success login, next to dashboard

			if($this->session->userdata('logged_id'))

			{
				redirect('dashboardhome');
			}
		}

	

	public function index()
	{
		// $data['page'] = 'component_login/login';
		// $this->load->view('indexLogin', $data);

		$this->form_validation->set_rules('emailLogin', 'Email', 'required');
		$this->form_validation->set_rules('passwordLogin', 'Password', 'required');

		if($this->form_validation->run()==TRUE)
		{
			$username = $this->input->post('emailLogin');
			$password = $this->input->post('passwordLogin');

			$userLogin= $this->userModel->get_username_by_id($username);

			// Jika username ketemu 
			if($userLogin)
			{
				// Check password jika ada
				if(check_password($password, $userLogin->password))
				{
					$this->session->set_userdata(array(
						// Masukkan input name di sebelah kiri. Sebelah kanan adalah nama field
						'UserIDLogin' => $userLogin->id,
						'emailLogin' => $userLogin->email,
						'logged_id' => TRUE
					));

					// Redirect ke dashboard
					$this->session->set_flashdata('success', 'Welcome, '. $username);
					redirect('dashboardhome');
				}
				// Kalau ga ketemu password
				else
				{
					$this->session->set_flashdata('failed', 'Password is wrong');
					redirect('homeloginController');
				}
			}

			// Jika username ga ketemu
			else
			{
				$this->session->set_flashdata('failed', 'Username is wrong');
				redirect('homeloginController');
			}
		}

		else
		{
			$this->load->view('homelogin');
		}

	}
}

 ?>