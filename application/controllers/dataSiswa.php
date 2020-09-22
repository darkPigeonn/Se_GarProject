<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DataSiswa extends CI_Controller{
	public function index()
	{
		$this->load->view('dataSiswa'); 
		$this->load->view('admin/dataSiswa');
	}
	public function kembali(){
		$this->load->view('admin/halamanutama');
	}
}

