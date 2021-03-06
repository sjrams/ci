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

	public function get_cat_list() //获取所有商品分类
	{
        $data = $this->db->get_where('category',array('parent_id'=>0))->result_array();
        foreach ($data as $key => $value) {
        	$data[$key]['has_children'] = $this->db->get_where('category',array('parent_id'=>$value['cat_id']))->result_array();
        }
        return $data;
	}

	public function get_brand()//获取所有品牌
	{
		$data = $this->db->get('brand')->result_array();
		return $data;
	}

	public function get_goods_type()//获取所有商品类型
	{
		$data = $this->db->get('goods_type')->result_array();
		return $data;
	}

	public function set_goods($id,$arr)//修改商品参数
	{
		$this->db->update('goods',$arr,array('goods_id'=>$id));
	}
}