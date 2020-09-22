<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DataSiswa extends CI_Controller{
	public function index()
	{
		$this->load->view('admin/dataSiswa'); 
		// ini tadi kurang admin
	}
	public function kembali(){
		$this->load->view('admin/halamanutama');
	}	
}

