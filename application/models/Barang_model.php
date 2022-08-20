<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{

  private $_table = "barang";

  public $id;
  public $kategori_id;
  public $supplier_id;
  public $nama;
  public $spesifikasi;
  public $harga;
  public $stok;
  public $status;

  public function rules()
  {
    return [

      [
        "field" => "kategori_id",
        "label" => "Kategori",
        "rules" => "required"
      ],

      [
        "field" => "supplier_id",
        "label" => "Supplier",
        "rules" => "required"
      ],

      [
        "field" => "nama",
        "label" => "Nama Barang",
        "rules" => "required"
      ],

      [
        "field" => "spesifikasi",
        "label" => "Spesifikasi Barang",
        "rules" => "required"
      ],

      [
        "field" => "harga",
        "label" => "Harga Barang",
        "rules" => "required"
      ],

      [
        "field" => "stok",
        "label" => "Stok Barang",
        "rules" => "required"
      ],

      [
        "field" => "status",
        "label" => "Status Kategori",
        "rules" => "required"
      ],

    ];
  }



  public function getAll()
  {
    return $this->db->get($this->_table)->result();
  }

  public function getById($kategori_id)
  {
    return $this->db->get_where($this->_table, ['kategori_id' => $kategori_id])->row();
  }

  public function save()
  {
    $post = $this->input->post();
    $this->nama_siswa = $post["kategori"];
    $this->jk = $post["status"];

    return $this->db->insert($this->_table, $this);
  }

  public function update()
  {
    $post = $this->input->post();
    $this->nis = $post["kategori_id"];
    $this->nama_siswa = $post["kategori"];
    $this->jk = $post["status"];

    return $this->db->update($this->_table, $this, array('kategori_id' => $post["kategori_id"]));
  }

  public function delete($kategori_id)
  {
    return $this->db->delete($this->_table, array('kategori_id' => $kategori_id));
  }
}
