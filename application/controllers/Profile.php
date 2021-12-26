<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Profile_model');
		$this->load->model('Middleware_model');
		$this->Middleware_model->auth();
	}

	public function index()
	{
		//get master select options    
		// $data['agamas'] = $this->Profile_model->masterAgama();
		$data['pendidikans'] = $this->Profile_model->masterPendidikan();
		$data['provinsis'] = $this->Profile_model->masterProvinsi();
		//end

		//get profile customer
		$data['profile'] = $this->Profile_model->getById();

		$this->load->view('profile', $data);
	}

	public function update()
	{
		$profile = $this->Profile_model;

		$validation = $this->form_validation;
		$validation->set_rules($profile->rules());

		if ($validation->run()) {
			$profile->update();
			$this->session->set_flashdata('updated', 'Update Profile Success');
		}

		redirect('profile');
		// $this->index();
	}

	public function getKabupaten()
	{
		$id = $this->input->post('provinsi');
		$regencies = $this->Profile_model->getKabupaten($id);
		$profile = $this->Profile_model->getById();

		$output = "";
		foreach ($regencies as $regency) {
			$selected = "";
			if ($profile->kabupaten == $regency->id_kabupaten) {
				$selected = "selected";
			}
			$output .= "<option value='" . $regency->id_kabupaten . "'" . $selected . ">" . $regency->nama_kabupaten . "</option>";
		}
		// 
		echo $output;
	}

	public function getKota()
	{
		$id = $this->input->post('kabupaten');
		$cities = $this->Profile_model->getKota($id);
		$profile = $this->Profile_model->getById();

		$output = "";
		foreach ($cities as $city) {
			$selected = "";
			if ($profile->kabupaten == $city->id_kota) {
				$selected = "selected";
			}
			$output .= "<option value='" . $city->id_kota . "'" . $selected . ">" . $city->nama_kota . "</option>";
		}
		// 
		echo $output;
	}
}
