<?php

class admin_model extends CI_Model {
    public function mens_product($data) {
        $this->load->database();
       return $this->db->insert('mens_product_table',$data);
    }
}
?>