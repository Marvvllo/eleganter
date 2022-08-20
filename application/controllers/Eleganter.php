<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Eleganter extends CI_Controller
{

  public function index()
  {
    $this->load->view('components/Header');
    $this->load->view('Home');
    $this->load->view('components/Footer');
  }
}
