<?php

class rum_model extends CI_Model
{
    public function getAllTable($table_name)
    {
        return $this->db->get($table_name);
    }

    public function getKategori()
    {
        return $this->db->get_where('kategori', ['status_kategori' => 0]);
    }
    public function getDetailKmeans()
    {
        $this->db->select('id_kmeans, id_produk, nilai');
        return $this->db->get('detail_kmeans');
    }

    public function getTotalKmeans()
    {
        return $this->db->count_all('k_means');
    }

    public function getDetailProduk($id_produk)
    {
		$this->db->set('viewer', 'viewer+1', false);
		$this->db->where('id_produk', $id_produk);
		$this->db->update('produk');

        $this->db->select('produk.id_produk, kategori.id_kategori, nama_kategori, nama_produk, harga_produk, stock, deskripsi_produk, url_image');
        $this->db->from('produk');
        $this->db->join('image', 'image.id_produk = produk.id_produk');
        $this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori');
        $this->db->where('produk.id_produk', $id_produk);

        // echo $this->db->get_compiled_select();
        return $this->db->get();
    }

    // using in landing page our produk
    public function selectProdukImage($our)
    {
        $this->db->select('p.id_produk, p.id_kategori, p.nama_produk, p.harga_produk, p.deskripsi_produk, p.url_produk, p.produk_created_at, p.produk_updated_at, i.url_image');
        $this->db->from('produk p');
        $this->db->join('image i', 'i.id_produk = p.id_produk');
        $this->db->group_by('1');
        $this->db->limit(8);
        if ($our == 'new') {
            $this->db->order_by('p.produk_updated_at', 'desc');
        }

        return $this->db->get();
    }

    // Select join distinct id_produk
    public function getRelatedProduk($id_produk)
    {
        // TODO: Get related product
		$this->db->select('produk.id_produk, nama_produk, harga_produk, deskripsi_produk, url_image');
		$this->db->from('produk');
		$this->db->join('image', 'image.id_produk = produk.id_produk');
		$this->db->order_by('viewer', 'desc');
		$this->db->order_by('purchased', 'desc');
		$this->db->group_by('produk.id_produk');
		$this->db->limit(5);
		return $this->db->get();
    }

    public function addToCart($data)
    {
        $this->db->insert('cart', $data);
    }

    public function product_exist($where)
    {
        return $this->db->get_where('cart', $where)->result_array()[0]['id_cart'];
    }

    public function getQty($where)
    {
        $this->db->select('qty_cart');
        $this->db->where($where);
        return $this->db->get('cart')->result_array()[0]['qty_cart'];
    }

    public function tambah_qty($id_cart, $updateQty)
    {
        $this->db->where('id_cart', $id_cart);
        $this->db->update('cart', $updateQty);
        return $this->db->affected_rows();
    }
}
