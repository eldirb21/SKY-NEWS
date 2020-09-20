<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        //wek user arahnya
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'MY Profile';
        $this->load->view('admin/berita/list', $data); //masuk halaman berita web untuk user
    }
}