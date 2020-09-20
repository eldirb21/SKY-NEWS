<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once(dirname(__FILE__) . "/User.php");
class Berita extends User
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("beritafront_model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data["beritas"] = $this->beritafront_model->getAll();
        $data['title'] = 'List berita';
        $this->load->view('auth/templates/auth_header', $data);
        $this->load->view('auth/templates/auth_footer');
        $this->load->view("user/listberita", $data);
    }

    public function view($id)
    {
        $this->load->model('beritafront_model');
        $detail = $this->beritafront_model->detail_data($id);
        $data['detail'] = $detail;
        $data['title'] = 'Detail berita';
        $this->load->view('auth/templates/auth_header', $data);
        $this->load->view('auth/templates/auth_footer');
        $this->load->view('user/viewberita', $data);
    }
    public function search_keyword()
    {
        $this->load->view('search');
    }
    public function hasil()
    {
        $data2['title'] = $this->beritafront_model->search();
        $this->load->view('result', $data2);
    }



    // ================login User================
    // public function user()
    // {
    //     //wek user arahnya
    //     $data['user'] = $this->db->get_where('user', ['email' =>
    //     $this->session->userdata('email')])->row_array();
    //     $data['title'] = 'MY Profile';
    //     $this->load->view('user/listberita', $data); //masuk halaman berita web untuk user
    // }

    public function add()
    {
        $berita = $this->beritafront_model;
        $validation = $this->form_validation;
        $validation->set_rules($berita->rules());

        if ($validation->run()) {
            $berita->save();
            $this->session->set_flashdata('success', 'Berhasil di simpan');
        }
        $this->load->view("user/new_form");
    }

    //===============EDIT==============================
    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/beritas');

        $berita = $this->beritafront_model;
        $validation = $this->form_validation;
        $validation->set_rules($berita->rules());

        if ($validation->run()) {
            $berita->update();
            $this->session->set_flashdata('success', 'Berhasil di simpan');
        }
        $data["berita"] = $berita->getById($id);
        if (!$data["berita"]) show_404();

        $this->load->view("admin/berita/edit_form", $data);
    }

    //==============DELETE===================
    public function delete($id = null)
    {
        if (!isset($id)) show_404();
        if ($this->beritafront_model->delete($id)) {

            redirect(site_url('admin/beritas'));
        }
    }
}
