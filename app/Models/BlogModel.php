<?php
    class BlogModel extends CI_Model
    {
        /*Hiển thị*/
        function display_records()
        {
            $query=$this->db->query("SELECT * FROM tbl_news");
            return $query->result();
        }
    }   