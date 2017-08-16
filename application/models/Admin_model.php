<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function get_admin($username)//获取管理员信息
	{
		$data = $this->db->get_where('admin_user',array('user_name'=>$username))->result_array();
		return $data;
	}

	public function get_goods_list()//获取商品列表
	{
		$data = $this->db->get_where('goods')->result_array();
		return $data;
	}

	public function get_goods($id)//获取商品详情
	{
		$data = $this->db->get_where('goods',array('goods_id'=>$id))->result_array();
		return $data;
	}
}