<?php 

/**
 * 
 */
class userController extends CI_Controller
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }

	public function index() {
		$this->load->view('templates/header_user');
		$this->load->view('ortu/halamanDepanOrtu');
		
	}
	public function viewUangSaku(){
		$this->load->view('templates/header_user');
		$this->load->view('ortu/uangSaku');
	}
	public function viewUangAsrama(){
		$this->load->view('templates/header_user');
		$this->load->view('ortu/keuanganAsrama');
	}
public function viewProfil(){
		$this->load->view('templates/header_user');
		$this->load->view('ortu/profil');
	}

}
