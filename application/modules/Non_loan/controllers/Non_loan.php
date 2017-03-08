<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Non_loan extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('non_loan_model', 'non_loan');
	}
	
	public function index()
	{	
		$data_content = array(
				'result' => $this->non_loan->get_all()
		);
		
		$data = array(
				'title' => 'แบบบันทึกขอสินเชื่อ (กรณีไม่รับคำขอ)',
				'content' => $this->parser->parse('non_loan', $data_content, TRUE)
		);
		
		$this->parser->parse('main', $data);
	}
	
	public function add()
	{
		$data = array(
				'title' => 'แบบบันทึกขอสินเชื่อ (กรณีไม่รับคำขอ)',
				'content' => ''
		);
	
		$this->parser->parse('main', $data);
	}
	
	public function edit()
	{
		$data = array(
				'title' => 'แบบบันทึกขอสินเชื่อ (กรณีไม่รับคำขอ)',
				'content' => ''
		);
	
		$this->parser->parse('main', $data);
	}
}