<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('admin/report_model');
  }

  public function index()
  {
    $this->load->view('admin/report');
  }
}
