<?php
defined('BASEPATH') or exit('No direct script access allowed');


class contact extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('components/Header');
    $this->load->view('Contact');
    $this->load->view('components/Footer');
  }
}
