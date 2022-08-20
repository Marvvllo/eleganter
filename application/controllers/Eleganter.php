<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Eleganter extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Barang_model");
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data["barang"] = $this->Barang_model->getAll();
    $this->load->view('components/Header');
    $this->load->view('Home', $data);
    $this->load->view('components/Footer');
  }
}
