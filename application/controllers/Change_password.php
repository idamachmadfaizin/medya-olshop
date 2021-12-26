<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Change_password extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('Change_password_model');

		$this->load->model('Middleware_model');
		$this->Middleware_model->auth();
  }

  public function index()
  {
    $this->load->view('change_password');
  }

  public function update()
  {
    $id = $this->session->id_customer;
    $change = $this->Change_password_model;

    $validation = $this->form_validation;
    $validation->set_rules($change->rules());

    if ($validation->run()) {
      $change->update();
      $this->session->set_flashdata('updated', 'Change Password Success');
    }

    // redirect('/change_password');
    $this->index();
  }
}
