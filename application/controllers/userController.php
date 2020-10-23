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
}
 ?>