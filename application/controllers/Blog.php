<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_artikel');
    }
    public function artikel($id)
    {
        $data['attr'] = $this->db->get('artikel')->result_array();
        $data['artikel'] = $this->M_artikel->get_artikel_by_id2($id);
        $data['title'] = 'Nanti Jadi Judul Deh';
        $this->load->view('index-templates/header', $data);
        $this->load->view('blog/artikel', $data);
        $this->load->view('index-templates/footer');
    }


    public function tag($id)
    {

        $data['artikel'] = $this->M_artikel->get_by_tag()->result_array();
        $data['title'] = 'Healtify - Tag';
        $this->load->view('index-templates/header', $data);
        $this->load->view('blog/tag', $data);
        $this->load->view('index-templates/footer');
    }
}
