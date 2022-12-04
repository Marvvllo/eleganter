<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("kategori_model");
    $this->load->library('form_validation');
  }

  public function create()
  {
    $kategori = $this->kategori_model;
    $validasi = $this->form_validation;
    $validasi->set_rules($kategori->rules());

    if ($validasi->run()) {
      $insert = $kategori->save();

      if ($insert) {
        redirect(base_url('dashboard/kategori'));
      } else {
        echo '<script language="javascript"> 
        alert("Gagal menambah data")
        </script>';
      }
    }

    $this->load->view('dashboard/header');
    $this->load->view('dashboard/create_kategori');
    $this->load->view('dashboard/footer');
  }

  public function edit($id = null)
  {
    if (!isset($id)) redirect(base_url('dashboard/kategori'));

    $kategori = $this->kategori_model;
    $validasi = $this->form_validation;
    $validasi->set_rules($kategori->rules());

    if ($validasi->run()) {
      $update = $kategori->update();

      if ($update) {
        redirect(base_url('dashboard/kategori'));
      } else {
        echo '<script language="javascript"> 
        alert("Gagal menambah data")
        </script>';
      }
    }

    $data["kategori"] = $kategori->getById($id);
    if (!$data['kategori']) show_404();

    $this->load->view('dashboard/header');
    $this->load->view('dashboard/edit_kategori', $data);
    $this->load->view('dashboard/footer');
  }

  public function delete($id = null)
  {
    if (!isset($id)) show_404();

    if ($this->kategori_model->destroy($id)) {
      $this->session->set_flashdata('success', 'Data berhasil dihapus');
      redirect('dashboard/kategori');
    }
  }
}
