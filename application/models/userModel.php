<?php 


/**
 * 
 */
class UserModel extends CI_Model
{
	public function get_username_by_id($username)
	{
		// Row untuk ambil 1 user
		return $this->db->get_where('usertable', array('email' => $username))->row();
	}

}
 ?>