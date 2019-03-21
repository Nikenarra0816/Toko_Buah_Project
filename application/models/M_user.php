<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here

	}

//Berhubungan dengan Login
	public function get_login()
	{
		return $this->db
					->where('username',$this->input->post('username'))
					->where('password',$this->input->post('password'))
					->get('admin');
	}

//Berhubungan dengan Register
	public function masuk()
	{
		// Mengambil data dari form register dengan method POST
		$data_simpan=array(
			'nama_admin' => $this->input->post('nama_admin'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			 );

		$this->db->insert('admin', $data_simpan);

		if($this->db->affected_rows()>0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

}