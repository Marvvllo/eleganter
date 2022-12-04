<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{

  private $_table = "barang";

  public $id_barang;
  public $id_kategori;
  public $nama_barang;
  public $harga;
  public $spesifikasi;
  public $gambar;
  public $status;

  public function rules()
  {
    return [

      [
        "field" => "id_barang",
        "label" => "ID Barang",
        "rules" => "required"
      ],
      [
        "field" => "id_kategori",
        "label" => "ID Kategori",
        "rules" => "required"
      ],

      [
        "field" => "nama_barang",
        "label" => "Nama Barang",
        "rules" => "required"
      ],

      [
        "field" => "harga",
        "label" => "Harga Barang",
        "rules" => "required"
      ],

      [
        "field" => "spesifikasi",
        "label" => "Spesifikasi Barang",
        "rules" => "required"
      ],

      [
        "field" => "gambar",
        "label" => "Gambar Barang",
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
    // return $this->db->get($this->_table)->result();
    $this->db->join('kategori k', 'k.kategori_id = b.id_kategori');
    return $this->db->get('barang b')->result();
  }

  public function getById($id_barang)
  {
    return $this->db->get_where($this->_table, ['id_barang' => $id_barang])->row();
  }

  public function save()
  {
    $post = $this->input->post();
    $this->id_barang = $post["id_barang"];
    $this->id_kategori = $post["id_kategori"];
    $this->nama_barang = $post["nama_barang"];
    $this->harga = $post["harga"];
    $this->spesifikasi = $post["spesifikasi"];
    $this->gambar = $post["gambar"];
    $this->status = $post["status"];

    return $this->db->insert($this->_table, $this);
  }

  public function update()
  {
    $post = $this->input->post();
    $this->id_barang = $post["id_barang"];
    $this->id_kategori = $post["id_kategori"];
    $this->nama_barang = $post["nama_barang"];
    $this->harga = $post["harga"];
    $this->spesifikasi = $post["spesifikasi"];
    $this->gambar = $post["gambar"];
    $this->status = $post["status"];

    return $this->db->update($this->_table, $this, array('id_barang' => $post["id_barang"]));
  }

  public function destroy($id_barang)
  {
    return $this->db->delete($this->_table, array('id_barang' => $id_barang));
  }
}
