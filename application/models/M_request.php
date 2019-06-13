<?php

class M_request extends CI_Model
{
    public function get_request()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('jual');
        return $query->result();
    }
}
