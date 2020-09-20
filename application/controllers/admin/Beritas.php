<?php
defined('BASEPATH') or exit('No direct script access allowed');

include_once(dirname(__FILE__) . "/Admin.php");
class Beritas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("berita_model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data["beritas"] = $this->berita_model->getAll();
        $this->load->view("admin/berita/list",  $data);
    }
    public function view($id)
    {
        $this->load->model('beritafront_model');
        $detail = $this->berita_model->detail_data($id);
        $data['detail'] = $detail;
        $data['title'] = 'Detail berita';
        $this->load->view('auth/templates/auth_header', $data);
        $this->load->view('auth/templates/auth_footer');
        $this->load->view('admin/berita/viewberita', $data);
    }
    public function add()
    {
        $berita = $this->berita_model;
        $validation = $this->form_validation;
        $validation->set_rules($berita->rules());

        if ($validation->run()) {
            $berita->save();
            $this->session->set_flashdata('success', 'Berhasil di simpan');
        }
        $this->load->view("admin/berita/new_form");
    }

    //===============EDIT==============================
    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/beritas');

        $berita = $this->berita_model;
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
        if ($this->berita_model->delete($id)) {

            redirect(site_url('admin/beritas'));
        }
    }

    // ================login Admin================
    public function admin()
    {
        //wek user arahnya
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'MY Profile';
        $this->load->view('admin/berita/list', $data); //masuk halaman berita web untuk user
    }

    // =====================================IMAGE UPLOAD==========================================
    public function createuploadproses()
    {
        $this->load->view('user/galeri');
    }
    public function proses()
    {
        $config['upload_path'] = './upload/galeri/';
        $config['allowed_types'] = 'gif|jpg|jpeg|git|png';
        $config['max_size'] = 500;
        $config['max_width'] = 2048;
        $config['max_height'] = 1000;
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);
        $ket_berkas = $this->input->post('ket_berkas');
        $jumlah_upload = count($_FILES['berkas']['name']);
        for ($i = 0; $i < $jumlah_upload; $i++) {
            if (!empty($_FILES['berkas']['name'][$i])) {
                $_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
                $_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
                $_FILES['file']['size'] = $_FILES['berkas']['size'][$i];

                if ($this->upload->do_upload('file')) {
                    $uploadData = $this->upload->data();
                    $data['nama_berkas'] = $uploadData['file_name'];
                    $data['ket_berkas'] = $ket_berkas[$i];
                    $data['tipe_berkas'] = $uploadData['file_ext'];
                    $data['ukuran_berkas'] = $uploadData['file_size'];
                    $this->db->insert('tb_berkas', $data);
                }
            }
        }
        redirect('beritas/upload'); //https://www.warungbelajar.com/membuat-fitur-multiple-upload-di-codeigniter.html
    }
}