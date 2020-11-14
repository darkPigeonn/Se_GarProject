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
	public function __construct() {
		parent::__construct();
		$this->load->model('admin_models');
	}
	public function index()
	{
		$this->load->view('halDepan/halamanDepan');
	}
	public function halut(){
		$this->load->view('templates/header.php');
		$this->load->view('admin/halamanutama.php');
	}
	// public function viewdataSiswa()
	// {
	// 	$this->load->view('templates/header.php');
	// 	$this->load->view('admin/dataSiswa');
	// }
	public function viewdataKeuangan(){
		$this->load->view('templates/header.php');
		$this->load->view('admin/dataKeuangan');
	}
	public function viewdataSiswa(){
		$data['seminaris'] = $this->admin_models->getAllSeminaris();
		$this->load->view('templates/header.php');
		$this->load->view('admin/dataSeminaris',$data);
	}
	public function laporan(){
		$this->load->view('templates/header.php');
		$this->load->view('admin/laporan');
	}
	public function infoKeuangan(){
		$this->load->view('ortu/infoKeuangan');
	}
	public function detailProfil(){
		$this->load->view('templates/header.php');
		$this->load->view('admin/detailSiswa');
	}


	//cek login

	public function login() {
		//note alur login - cek semua kolom di isi (required)- ambil data masuk - cek data ada tidak - cek status admin / user
		//jika admin di buka menu admin - jika user dibuka menu user

		//contoh koding manual ini tanpa akses data base hanya melihat user name 
		//jika admin dia masuk ke admin jika selain admin dia masuk ke tampilan ortu

		//ambil data dari form
		$username = $this->input->post('userName');
		$pass = $this->input->post('password');

		//cek userName 
		if($username == "admin") {
			redirect('admin/halut');
		}else{
			redirect('userController');
		}
	}
}

