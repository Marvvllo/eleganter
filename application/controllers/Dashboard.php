<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard extends CI_Controller
{

  public function index()
  {
    $this->load->view('components/sidebar');
    $this->load->view('dashboard/index');
    $this->load->view('components/footer');
  }
}
