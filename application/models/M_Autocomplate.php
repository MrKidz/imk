<?php
    class M_Autocomplate extends CI_Model{
        function SearchNamaSupplayer($namasupplayer){
            $this->db->like('NamaSupplayer', $namasupplayer, 'both');
            $this->db->order_by('NamaSupplayer', 'ASC');
            $this->db->limit(10);
            return $this->db->get('supplayer')->result();
        }

        function SearchMesinLipat($namamesin){
            $this->db->like('NamaMesin', $namamesin, 'both');
            $this->db->order_by('NamaMesin', 'ASC');
            $this->db->limit(10);
            return $this->db->get('mesin')->result();
        }
    }
?>