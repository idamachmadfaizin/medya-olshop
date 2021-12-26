<?php defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('checkout_model');
		$this->load->model('cart_model');
		$this->load->model('Profile_model');
		$this->load->model('Rum_model');

		$this->load->model('Middleware_model');
		$this->Middleware_model->auth();
	}

	public function index()
	{
		//get data profile
		$data['profile'] = $this->Profile_model->getById();

		// cek data is completed
		foreach ($data['profile'] as $coloumnProfile) {
			if (empty($coloumnProfile)) {
				$this->session->set_flashdata('incompleteData', 'Please complete the data first');
				redirect('/profile');
			}
		}

		$data['carts'] = $this->cart_model->get_cart();
		$data['grand_total'] = $this->cart_model->grand_total()->row();

		if (empty($data['carts'])) {
			redirect('/produk');
		}

		$this->load->view('checkout', $data);
	}

	public function makeorder()
	{
		$checkout = $this->checkout_model;

		// get grand total
		$grand_total = $this->cart_model->grand_total()->row();
		// get id order inserted
		$id_order = $checkout->make_order($grand_total->grand_total);

		$data['id_order'] = $id_order;
		$data['grand_total'] = $this->cart_model->grand_total()->row();

		// insert to _detail_order
		$cart = $this->cart_model->get_cart();
		$detail = array();
		$id_produks = array();

		foreach ($cart as $cart) {
			$arr['id_order'] = $id_order;
			$arr['id_produk'] = $cart->id_produk;
			$arr['jumlah'] = $cart->qty_cart;
			$arr['harga_satuan'] = $cart->harga_produk;


			array_push($detail, $arr); // push to arr $detail

			$id_produks[] = ["id_produk" => $arr['id_produk'] = $cart->id_produk]; // push to arr $id_produks
		}


		$check = $this->checkout_model->insDetailOrder($detail); //insert into detail order
		// end
		$checkout->delete_cart(); //delete cart

		$this->load->view('order_received', $data);
	}
}
