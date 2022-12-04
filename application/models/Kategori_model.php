<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{

  private $_table = "kategori";

  public $kategori_id;
  public $kategori;
  public $status;

  public function rules()
  {
    return [

      [
        "field" => "kategori_id",
        "label" => "ID Kategori",
        "rules" => "required"
      ],
      [
        "field" => "kategori",
        "label" => "Kategori",
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
    $this->kategori_id = $post["kategori_id"];
    $this->kategori = $post["kategori"];
    $this->status = $post["status"];

    return $this->db->insert($this->_table, $this);
  }

  public function update()
  {
    $post = $this->input->post();
    $this->kategori_id = $post["kategori_id"];
    $this->kategori = $post["kategori"];
    $this->status = $post["status"];

    return $this->db->update($this->_table, $this, array('kategori_id' => $post["kategori_id"]));
  }

  public function destroy($kategori_id)
  {
    return $this->db->delete($this->_table, array('kategori_id' => $kategori_id));
  }
}
