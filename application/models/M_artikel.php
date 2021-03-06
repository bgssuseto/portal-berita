<?php

class M_artikel extends CI_Model
{

    public function get_artikel_by_id($id)
    {

        $this->db->where('id', $id);
        return $this->db->get('artikel');
    }
    public function get_artikel_by_id2($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('artikel')->row_array();
    }

    public function get_artikel()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('artikel')->result_array();
    }


    public function get_by_tag()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->where('tag', $this->uri->segment(3));
        return $this->db->get('artikel');
    }


    public function update_artikel($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('artikel', $data);
        // if ($this->db->affected_rows() > 0) {
        //     return true;
        // } else {
        //     return false;
        // }
    }


    public function delete_artikel($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('artikel');
    }
}
