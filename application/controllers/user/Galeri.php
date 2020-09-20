<?php
class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $data['data'] = $this->db->get('galeri')->result();
        $this->load->view('galery/create', $data, FALSE);
    }
}
