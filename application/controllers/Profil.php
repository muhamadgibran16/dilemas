<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index()
	{
		$this->load->view('my_profil');
    
	}
    
	public function view_profile()
	{
		$data['name'] = $this->input->post('name');
		$data['nim'] = $this->input->post('nim');
		$data['kelas'] = $this->input->post('kelas');
		$data['tgl'] = $this->input->post('tgl');
		$data['tempat'] = $this->input->post('tempat');
		$data['alamat'] = $this->input->post('alamat');
		$data['jeniskel'] = $this->input->post('jeniskel');
		$data['agama'] = $this->input->post('agama');

		$this->load->view('view_profile',$data);
    }   
}