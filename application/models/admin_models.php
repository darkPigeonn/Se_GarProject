<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class admin_models extends CI_Model {

	public function getAllSeminaris(){
		return $this->db->get('siswa')->result_array();
	}
}


 ?>