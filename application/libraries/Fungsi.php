<?php

Class Fungsi {

	protected $ci;

	function __construct() {
		$this->ci =& get_instance();
	}

	public function count_item() {
		$this->ci->load->model('item_m');
		return $this->ci->item_m->get()->num_rows();
	}
	public function count_supplier() {
		$this->ci->load->model('supplier_m');
		return $this->ci->supplier_m->get()->num_rows();
	}
	public function count_customer() {
		$this->ci->load->model('customer_m');
		return $this->ci->customer_m->get()->num_rows();
	}
	public function count_stock() {
		$this->ci->load->model('stock_m');
		return $this->ci->stock_m->get()->num_rows();
	}
}