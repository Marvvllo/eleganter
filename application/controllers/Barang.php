<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("barang_model");
    $this->load->model("kategori_model");
    $this->load->library('form_validation');
  }

  public function create()
  {
    $barang = $this->barang_model;
    $validasi = $this->form_validation;
    $validasi->set_rules($barang->rules());

    if ($validasi->run()) {
      $insert = $barang->save();

      if ($insert) {
        redirect(base_url('dashboard/barang'));
      } else {
        echo '<script language="javascript"> 
        alert("Gagal menambah data")
        </script>';
      }
    }

    $kategori = $this->kategori_model;
    $data['kategori'] = $kategori->getAll();

    $this->load->view('dashboard/header');
    $this->load->view('dashboard/create_barang', $data);
    $this->load->view('dashboard/footer');
  }

  public function edit($id = null)
  {
    if (!isset($id)) redirect(base_url('dashboard/barang'));

    $barang = $this->barang_model;
    $validasi = $this->form_validation;
    $validasi->set_rules($barang->rules());

    if ($validasi->run()) {
      $update = $barang->update();

      if ($update) {
        redirect(base_url('dashboard/barang'));
      } else {
        echo '<script language="javascript"> 
        alert("Gagal menambah data")
        </script>';
      }
    }

    $data["barang"] = $barang->getById($id);
    if (!$data['barang']) show_404();

    $kategori = $this->kategori_model;
    $data['kategori'] = $kategori->getAll();

    $this->load->view('dashboard/header');
    $this->load->view('dashboard/edit_barang', $data);
    $this->load->view('dashboard/footer');
  }

  public function delete($id = null)
  {
    if (!isset($id)) show_404();

    if ($this->barang_model->destroy($id)) {
      $this->session->set_flashdata('success', 'Data berhasil dihapus');
      redirect('dashboard/barang');
    }
  }
}
