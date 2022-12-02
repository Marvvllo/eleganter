<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("kategori_model");
    $this->load->model("barang_model");
    $this->load->model("supplier_model");
  }

  public function index()
  {
    $data['kategori'] = $this->kategori_model->getAll();

    // $this->load->view('dashboard/header');
    // $this->load->view('dashboard/home');
    // $this->load->view('dashboard/footer');

    redirect(base_url('/dashboard/barang'));
  }

  public function kategori()
  {
    $data['kategori'] = $this->kategori_model->getAll();

    $this->load->view('dashboard/header');
    $this->load->view('dashboard/kategori', $data);
    $this->load->view('dashboard/footer');
  }

  public function barang()
  {
    $data['barang'] = $this->barang_model->getAll();

    $this->load->view('dashboard/header');
    $this->load->view('dashboard/barang', $data);
    $this->load->view('dashboard/footer');
  }

  public function supplier()
  {
    $data['supplier'] = $this->supplier_model->getAll();

    $this->load->view('dashboard/header');
    $this->load->view('dashboard/supplier', $data);
    $this->load->view('dashboard/footer');
  }
}
