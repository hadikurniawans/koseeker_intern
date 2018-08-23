<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('v_register');
	}

	public function data_register(){
		$nama = $this->input->post('nama');
		echo $nama;
	}
	

}

?>