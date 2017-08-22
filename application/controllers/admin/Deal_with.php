<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deal_with extends RM_Controller
{
	public function __construct()
	{
		parent::__construct(); 

		$this->load->model('admin_model','model');
	}

	public function add_goods()//编辑添加商品
	{
		$data = $this->input->post();
		p($data);
	}



	/**
    *	ajax获取数据
    *
    */
    
}