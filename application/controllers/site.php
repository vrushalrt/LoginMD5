<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller{

	/*function __construct(){

		parent::CI_Controller();
		$this->is_logged_in();
	}
*/
	function members_area(){

		$this->load->view('logged_in_area');
	}

	function another_page(){ //just for sample

		echo 'Good. you\'re logged in.';
	}

	function is_logged_in(){

		$is_logged_in=$this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in !=true)
		{
			echo 'You don\'t have permission to access this page.<a href="../verifylogin">Login</a>';
			die();
		}
	}























}