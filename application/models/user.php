<?php
 

class User extends CI_Model
{
	function validate()
	{
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password', MD5($this->input->post('password')));
		$query = $this->db->get('users');

		if($query->num_rows() == 1)
		{
			return true;
		}
		else{
			return false;
		}
	}

	function create_memeber()
	{

		$new_member_insert_data=array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email_address' => $this->input->post('email_address'),			
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))						
			);

		$insert = $this->db->insert('users',$new_member_insert_data);
		return $insert;
	}
	
}

