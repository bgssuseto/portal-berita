<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function artikel($id)
    {
        $this->load->model('M_artikel');
        $data['artikel'] = $this->M_artikel->get_artikel_by_id2($id);
        $this->load->view('blog/artikel', $data);
    }
}
