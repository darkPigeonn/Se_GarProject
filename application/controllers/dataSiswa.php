<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class dataSiswa extends CI_Controller{
public function index()
	{
		$this->load->view('dataSiswa');
	}
	public function kembali(){
		$this->load->view('admin/halamanutama');
	}	
}