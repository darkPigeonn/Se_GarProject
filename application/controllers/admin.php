<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome');
	}
	public function login(){
		$this->load->view('admin/login');
	}
	public function halut(){
		$this->load->view('templates/header.php');
	}
	public function viewdataSiswa()
	{
		$this->load->view('templates/header.php');
		$this->load->view('admin/dataSiswa');
	}
	public function viewdataKeuangan(){
		$this->load->view('templates/header.php');
		$this->load->view('admin/dataKeuangan');
	}
	public function viewdataSeminaris(){
		$this->load->view('templates/header.php');
		$this->load->view('admin/dataSeminaris');
	}
}

