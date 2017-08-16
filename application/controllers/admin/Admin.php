<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends RM_Controller
{
	public function __construct()
	{
		parent::__construct(); 

		$this->load->model('admin_model','model');
	}

    public function index()
    {
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/index',$data);
    }

    public function main()
    {
    	$this->load->view('admin/main');
    }

    public function video()
    {
    	$this->load->view('admin/video');
    }

    public function goods_list()
    {
    	$this->load->view('admin/goods_list');
    }

    public function goods_list_conter() //商品列表
    {	
    	$data['goods'] = $this->model->get_goods_list();
    	$this->load->view('admin/goods_list_conter',$data);
    }

    /**
    *	ajax获取数据
    *
    */
    public function get_goods() //获取商品详情
    {
    	$id = $this->input->post('goods_id');
        $is = $this->input->post('data');
        $data = $this->model->get_goods($id);
        if($data[0][$is]){
            $arr = array($is=>0);
        }else{
            $arr = array($is=>1);
        }
       
        $this->model->set_goods($id,$arr);
    	echo json_encode($data);
    }
}