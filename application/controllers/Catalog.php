<?php
defined('BASEPATH') or exit('No direct script access allowed');


class catalog extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('components/Header');
    $this->load->view('Catalog');
    $this->load->view('components/Footer');
  }
}
