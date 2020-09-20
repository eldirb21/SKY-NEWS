<?php defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    private $_table = "beritas";

    public $berita_id;
    public $title;
    public $contents;
    public $image = "default.jpg";

    public function rules()
    {
        return [
            [
                'field' => 'title',
                'label' => 'title',
                'rules' => 'required'
            ],
            [
                'field' => 'contents',
                'label' => 'contents',
                'rules' => 'required'
            ],
        ];
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    function detail_data($id = null)
    {
        $query = $this->db->get_where('beritas', array('berita_id' => $id))->row();
        return $query;
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["berita_id" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->berita_id = uniqid();
        $this->title = $post["title"];
        $this->image = $this->_uploadImage();
        $this->contents = $post["contents"];
        return $this->db->insert($this->_table, $this);
    }
    public function update()
    {
        $post = $this->input->post();
        $this->berita_id = $post["id"];
        $this->title = $post["title"];

        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }

        $this->contents = $post["contents"];
        return $this->db->update($this->_table, $this, array('berita_id' => $post['id']));
    }
    public function delete($id)
    {
        $this->deleteImage($id);
        return $this->db->delete($this->_table, array("berita_id" => $id));
    }
    //==================UPLOAD IMAGE===========================================
    private function _uploadImage()
    {
        $config['upload_path']          = 'upload/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $this->berita_id;
        $config['overwrite']            = true;
        $config['max_size']             = 1024;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    public function deleteImage($id)
    {
        $berita = $this->getById('$id');
        if ($berita->image != "default.jpg") {
            $filename = explode(".", $berita->image)[0];
            return array_map('unlink', glob(FCPATH . "upload/$filename.*"));
        }
    }
}
