<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Catalog extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("kategori_model");
  }

  public function index()
  {
    $data['kategori'] = $this->kategori_model->getAll();

    $this->load->view('components/Header');
    $this->load->view('catalog', $data);
    $this->load->view('components/Footer');
  }

  public function item()
  {
    $this->load->view('components/Header');
    // $this->load->view('Home');
    $this->load->view('components/Footer');
  }
}
