<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class creport extends CI_Controller {

	public function index()
	{
        $this->load->model('mreport');
        $query=$this->mreport->get();
        $data['header']='tampil data buybackdj';
        $data['buybackdj']=$query->result_array();
        //print_r($data);
        $query=$this->mreport->total();
        $data['ttlbb']=$query->result_array();
        //print_r($data);
        $this->load->view('vreport',$data);
	}
}
