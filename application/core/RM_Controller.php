<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RM_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct(); 

		$username = $this->session->userdata('username');
		$aid = $this->session->userdata('aid');
		if(!$username || !$aid)
		{
			redirect('a');
		}
	}
}