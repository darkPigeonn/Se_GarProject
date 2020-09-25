<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class dataSeminaris extends CI_Controller{
public function index()
	{
		$this->load->view('admin/dataSeminaris');
	}
	public function kembali(){
		$this->load->view('admin/halamanutama');
	}	
}