<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class dataSeminaris extends CI_Controller{

public function __construct() {
	parent::__construct();
	$this->load->model('admin_models');
}
public function index()
	{
		$data['sminaris'] = $this->admin_models->getAllSeminaris();
		$this->load->view('templates/header.php');
		$this->load
	}
		
}