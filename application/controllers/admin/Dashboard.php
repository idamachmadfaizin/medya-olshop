<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Dashboard_model');

        $this->load->model('Middleware_model');
		$this->Middleware_model->auth_admin();
    }

    public function index()
    {
        $dashboard = $this->Dashboard_model;
        $dateNow = date('Y-m-d');

        $order_today = $dashboard->orderToday($dateNow);
        $dibayar = $dashboard->getWidget($dateNow, 'Dibayar');
        $proses = $dashboard->getWidget($dateNow, 'Proses');
        $cus = $dashboard->totCustomer();

        $data['widget'] = [
            'order_today' => $order_today,
            'dibayar'     => $dibayar,
            'proses'      => $proses,
            'customer'    => $cus
        ];
        $data['orders'] = $dashboard->getOrders($dateNow);
        if ($data['orders']) {
            $data['detail_orders'] = $dashboard->getDetailOrder($dateNow);
        }
        $data['KP'] = $dashboard->getKP($dateNow);

        $this->load->view('admin/dashboard', $data);
    }

    public function updateStatus()
    {
        $dashboard = $this->Dashboard_model;

        $id = $dashboard->updateStatus();

        redirect('admin/dashboard/');
    }
}
