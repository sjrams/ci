<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Captcha extends CI_Model
{
	public function __construct()
	{
		parent::__construct();		
		$this->load->helper('captcha');        //載入驗證碼函式
	}

	public function get_captcha()
	{	
		$rand = strtoupper(substr(md5(rand()),0,4));
		$session_rand = array("rand"=>$rand);
		$this->session->set_userdata($session_rand);
		$img = array(
			'word'	=>	$rand,
			'img_path'	=>	'./captcha/',
			'img_url'	=>	base_url('captcha/'),
			'font_path'	=>	'./path/to/fonts/texb.ttf',
			'img_width'	=>	'100',
			'img_height'=>	'36',
			'expiration'=>	10
			);
		$rec = create_captcha($img);
		return $rec['image'];
	}
}