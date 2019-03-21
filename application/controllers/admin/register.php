<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('m_user');
	}

    public function index()
	{
		if($this->session->userdata('login')==TRUE){
			$this->load->view("admin/overview");
		}
		 else {
			$this->load->view('registration');
		 }
	}

	public function simpan()
	{
		if($this->input->post('submit')){
			$this->form_validation->set_rules('nama_admin', 'Name', 'trim|required');
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if ($this->form_validation->run() == TRUE){

				if($this->m_user->masuk()==TRUE){
					$this->session->set_flashdata('pesan', 'sukses simpan');
					redirect('admin/login','refresh');
				} else {
					$this->session->set_flashdata('pesan', 'gagal simpan');
					redirect('admin/register', 'refresh');
				}

			} else {
				$this->session->set_flashdata('pesan', validation_errors());
				redirect('admin/register', 'pesan');
			}

		}
	}
}