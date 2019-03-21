<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

  // Login
	public function index()
	{
	if($this->session->userdata('login')==TRUE){
		$this->load->view('admin/overview');
    }
     else {
		$this->load->view('login');
     }
	}

	public function proses_login()
	{
		if($this->input->post('submit')){
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');
			if ($this->form_validation->run() == TRUE) {
				$this->load->model('m_user');

				if($this->m_user->get_login()->num_rows()>0){
					$data=$this->m_user->get_login()->row();
					$array = array(
						'login' => TRUE ,
						'nama_admin' => $data->nama_admin,
						'username' => $data->username,
						'password' => $data->password,
						'id_admin' => $data->id_admin
					);

					$this->session->set_userdata($array);
					redirect('admin/overview', 'refresh');
				} else {
					$this->session->set_flashdata('pesan', 'salah username dan password');
					redirect('admin/login', 'refresh');
				}
			} else {
				$this->session->set_flashdata('pesan', validation_errors());
			redirect('admin/login','refresh');
			}
	} 
	}

	public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}