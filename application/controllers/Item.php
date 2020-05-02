<?php defined('BASEPATH') OR exit('No direct script access allowed');

class item extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(['item_m', 'category_m', 'unit_m']);
	}

	public function index()
	{
		$data['row'] = $this->item_m->get();
		$this->template->load('template', 'product/item/item_data', $data);
	}

	public function add()
	{
		$item = new stdClass();
		$item->item_id = null;
		$item->barcode = null;
		$item->name = null;
		$item->category_id = null;
		$item->price = null;

		$query_category = $this->category_m->get();

		$query_unit = $this->unit_m->get();
		$unit[null] = '- Pilih -';
		foreach($query_unit->result() as $unt) {
			$unit[$unt->unit_id] = $unt->name;
		}

		$data = array(
			'page' => 'add',
			'row' => $item,
			'category' => $query_category,
			'unit' => $unit, 'selectedunit' => null,
		);
		$this->template->load('template', 'product/item/item_form', $data);
	}
	public function edit($id)
	{
		$query = $this->item_m->get($id);
		if($query->num_rows() > 0) {
			$item = $query->row();
			$query_category = $this->category_m->get();

			$query_unit = $this->unit_m->get();
			$unit[null] = '- Pilih -';
			foreach($query_unit->result() as $unt) {
				$unit[$unt->unit_id] = $unt->name;
			}

			$data = array(
				'page' => 'edit',
				'row' => $item,
				'category' => $query_category,
				'unit' => $unit, 'selectedunit' => $item->unit_id,
			);
			$this->template->load('template', 'product/item/item_form', $data);
		} else {
			echo "<script>alert('Data tidak ditemukan');";
			echo "window.location='".site_url('item')."';</script>";
		}
	}
	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			if($this->item_m->check_barcode($post['barcode'])->num_rows() > 0) {
				$this->session->set_flashdata('error', "Barcode $post[barcode] sudah dipakai orang lain");
				redirect('item/add');
			} else {
				$this->item_m->add($post);
			}
		} else if(isset($_POST['edit'])) {
			$this->item_m->edit($post);
		}

		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
		}
		redirect('item');
	}

	public function del($id)
	{
		$this->item_m->del($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data berhasil dihapus');
		}
		redirect('item');
	}
}
