<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Auth extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library("form_validation");
  }

  public function index()
  {
    // Cek Login User, Kalo Udah Login, Ga bisa Ke Halaman Login lagi
    if ($this->session->userdata('user')) {
      redirect('admin');
    }

    // Validasi Email dan Pass
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
      'required' => 'Email Tidak Boleh Kosong',
      'valid_email' => "Email Tidak Valid"
    ]);
    $this->form_validation->set_rules('password', 'password', 'required|trim', ['required' => 'Password Tidak Boleh Kosong']);
    // Kalo Validation Gagal == ualng login
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('auth/login');
    } else {
      // kalo berhasil, proses login
      $this->_login();
    }
  }

  // proses login
  private function _login()
  {

    $email = htmlspecialchars($this->input->post('email'));
    $password = $this->input->post('password');

    // cari user di database
    $user = $this->db->get_where('admin', ['username' => $email])->row_array();

    // kalo user ketemu
    if ($user) {
      // cek password
      if (password_verify($password, $user['password'])) {
        $data = [
          'admin' => $user['username'],
        ];
        $this->session->set_userdata($data);
        redirect('dashboard');
      }
      // kalo password salah
      else {
        $this->session->set_flashdata('error', 'Password Salah');
        redirect('auth');
      }
    }
    // kalo user ga ketemu
    else {
      $this->session->set_flashdata('error', 'Email Belum Terdaftar');
      redirect('auth');
    }
  }

  // logout
  public function logout()
  {
    // hapus session logout
    $this->session->unset_userdata('admin');
    redirect(base_url());
  }
}
