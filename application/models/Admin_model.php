<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function get_admin($username)
	{
		$data = $this->db->get_where('admin',array('name'=>$username))->result_array();
		return $data;
	}
}