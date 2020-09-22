<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class dataKeuangan extends CI_Controller{
public function index()
	{
		$this->load->view('dataKeuangan');
	}
	public function kembali(){
		$this->load->view('admin/halamanutama');
	}	
}