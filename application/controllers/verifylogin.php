<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifylogin extends CI_Controller {

		public function index(){



		$this->load->model('user');
		$query =  $this->user->validate();

		if($query){


			$data=array(

					'username'=>$this->input->post('username'),
					'is_logged_in'=>true
				);


			$this->session->set_userdata($data);
			redirect('site/members_area');
			//$this->load->view('home');

		}
		else
		{
			//$this->index();
			$this->load->view('error',$query);
		}
	}

	public function signup(){

		$this->load->view('signup_view');

	}

	public function create_member2(){

		//$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		//$this->load->library('form_validation');

		// field name, error message, validation rules
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		
		if($this->form_validation->run() == FALSE)
		{
			//echo '<script type="text/javascript">alert("ERROR..!")</script>';
			$this->load->view('signup_view');
		}
		
		else
		{			
			$this->load->model('user');
			if($query = $this->user->create_memeber())
			{
				//$data['main_content'] = 'signup_successful';
				//$this->load->view('includes/template', $data);
				//$this->load->view('success_signup_view');
				echo '<script type="text/javascript">alert("Success..!")</script>';
				$this->load->view('signup_view');	
			}
			else
			{
				echo '<script type="text/javascript">alert("ERROR..!")</script>';
				$this->load->view('signup_view');			
			}
		}


	}



	public function logout(){

		$this->session->sess_destroy();
		$this->load->view('login_view');
	}
}