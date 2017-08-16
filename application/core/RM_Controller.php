<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RM_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct(); 

		$user_name = $this->session->userdata('user_name');
		$user_id = $this->session->userdata('user_id');
		if(!$user_name || !$user_id)
		{
			redirect('a');
		}
	}
}