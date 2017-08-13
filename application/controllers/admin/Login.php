<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();		
		$this->load->model('captcha');		
	}

	public function index()
	{	
		$this->load->view('admin/login');
	}
	//获取验证码图片
	public function get_captcha()
	{	
		$data = $this->captcha->get_captcha();
		echo $data;
	}
	//获取后台登录资料
	public function get_login()
	{
		$this->load->model('admin_model');
		$username = $this->input->post('username');
		$data = $this->admin_model->get_admin($username);
		if(empty($data)){
			$data['error'] = 'error';
		}
		$data['code'] = $this->session->rand;
		echo json_encode($data);
	}
	//登录
	public function login_in()
	{
		$data = $this->input->post();
		$session_data = array(
			'aid'	=>	$data['aid'],
			'username'	=>	$data['username']
			);
		$this->session->set_userdata($session_data);
		redirect('i');
	}
	//退出
	public function login_out()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('aid');
		redirect('a');
	}
}