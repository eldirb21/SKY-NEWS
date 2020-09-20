<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        //wek user arahnya
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'MY Profile';
        $this->load->view('user/listberita', $data); //masuk halaman berita web untuk user
    }
}
