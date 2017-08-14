<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends RM_Controller
{

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

    public function goods_list_conter()
    {
    	$this->load->view('admin/goods_list_conter');
    }

}