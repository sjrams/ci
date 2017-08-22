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
        $data['username'] = $this->session->userdata('user_name');
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
        
        //载入分页类
        $this->load->library('pagination');
        $perPage = 10;
        $config['base_url'] = site_url('admin/admin/goods_list_conter');
        $config['total_rows'] = count($this->model->get_goods_list());
        $config['per_page'] = $perPage;
        $config['uri_segment'] = 4;
        $config['first_link'] = '首页';
        $config['prev_link'] = '<上一页';
        $config['next_link'] = '下一页>';
        $config['last_link'] = '末页';
        $config['cur_tag_open'] = '<span class="layui-laypage-curr"><em class="layui-laypage-em"></em><em>';//当前页链接的起始标签。
        $config['cur_tag_close'] = '</em></span>';//当前页链接的结束标签。
        $config['num_links'] = 5;
        $this->pagination->initialize($config);
        $data['links'] = $this->pagination->create_links();
        $offset = $this->uri->segment(4);
        $this->db->limit($perPage,$offset);

        $data['goods'] = $this->model->get_goods_list();

    	$this->load->view('admin/goods_list',$data);
    }

    public function add_goods() //添加编剧商品
    {
        $data['cat_list'] = $this->model->get_cat_list(); //获取所有商品分类
        $data['brand'] = $this->model->get_brand(); //获取所有品牌
        $data['goods_type'] = $this->model->get_goods_type(); //获取所有商品类型
        $offset = $this->uri->segment(4);
        if(isset($offset)){
            $data['type'] = '编辑商品信息';
            $data['goods'] = $this->model->get_goods($offset);
        }else{
            $data['type'] = '添加新商品';
        }
        
        $this->load->view('admin/add_goods',$data);
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