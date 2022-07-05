<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('level') == '') {
		   redirect('login');
		}
		$data = array(
		   'judul_page' => "Order Pembelian",
		   'konten' => 'order/view_order',
		);
		$this->load->view('v_index', $data);
	}

	public function detail_order($id_order)
	{
		if ($this->session->userdata('level') == '') {
		   redirect('login');
		}
		$data = array(
		   'judul_page' => "Detail Order Pembelian",
		   'konten' => 'order/detail_order',
		);
		$this->load->view('v_index', $data);
	}

	public function add_order()
	{
		date_default_timezone_set('Asia/Jakarta');
		$this->db->insert('order', array(
			'id_member' => $this->session->userdata('id_user'),
			'no_transaksi' => date('dmYHis'),
			'created_at' => get_waktu()
		));
		$this->session->set_flashdata('pesan', alert_biasa('Berhasil di tambahkan','success'));
          redirect("order");
	}

	public function simpan_detail_order($id_order)
	{
		$id_produk = $this->input->get('produk');
		$qty = $this->input->get('qty');
		$harga = get_data('produk','id_produk',$id_produk,'harga_jual');
		$subtotal = $harga * $qty;

		$this->db->insert('order_detail', array(
			'id_order' => $id_order,
			'id_produk' => $id_produk,
			'qty' => $qty,
			'harga' => $harga,
			'subtotal' => $subtotal
		));
		$this->session->set_flashdata('pesan', alert_biasa('Produk Berhasil di tambahkan','success'));
          redirect("order/detail_order/".$id_order);
	}

	public function delete($id_order)
	{
		if ($this->session->userdata('level') == '') {
		   redirect('login');
		}
		$this->db->where('id_order', $id_order);
		$this->db->delete('order');

		$this->db->where('id_order', $id_order);
		$this->db->delete('order_detail');
		$this->session->set_flashdata('pesan', alert_biasa('Berhasil di hapus','success'));
          redirect("order");
	}

	public function delete_detail_order($id_order, $id_detail_order)
	{
		if ($this->session->userdata('level') == '') {
		   redirect('login');
		}

		$this->db->where('id_detail_order', $id_detail_order);
		$this->db->delete('order_detail');
		$this->session->set_flashdata('pesan', alert_biasa('Berhasil di hapus','success'));
        redirect("order/detail_order/".$id_order);
	}

	public function konfirmasi()
	{
		$point = $this->input->get('point');
		$id_order = $this->input->get('id_order');

		$id_member = get_data('`order`','id_order',$id_order,'id_member');
		$no_transaksi = get_data('`order`','id_order',$id_order,'no_transaksi');

		$this->db->where('id_order', $id_order);
		$this->db->update('order', array(
			'konfirmasi' => 'y',
			'point' => $point
		));
		if ($point > 0) {
			$this->db->insert('log_point', array(
				'id_member' => $id_member,
				'point_in' => $point,
				'ket' => $no_transaksi,
				'created_at' => get_waktu()
			));
		}
		
		$this->session->set_flashdata('pesan', alert_biasa('Order berhasil di konfirmasi','success'));
          redirect("order");
	}



}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */