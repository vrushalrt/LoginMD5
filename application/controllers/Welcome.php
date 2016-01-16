<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

	function index()
	{
		//$this->load->helper(array('url','form'));
		$this->load->view('login_view');
	}

	/*function verifylogin()
	{

		$this->load->model('user');
		$query =  $this->user->validate();

		if($query){


			$data=array(

					'username'=>$this->input->post('username'),
					'is_logged_in'=>true
				);


			$this->session->set_userdata($data);
			//redirect($this->load->view('home'));
			$this->load->view('home');

		}
		else
		{
			//$this->index();
			$this->load->view('error',$query);
		}

	}*/
	public function signup(){

		$this->load->view('signup_view');

	}


	

}
