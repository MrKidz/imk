<?php
class Blog_model extends CI_Model{
 
    function search_blog($title){
        $this->db->like('NamaSupplayer', $title , 'both');
        $this->db->order_by('NamaSupplayer', 'ASC');
        $this->db->limit(10);
        return $this->db->get('supplayer')->result();
    }
}