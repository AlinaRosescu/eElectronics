<?php

class Brands extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function getBrands() {
        $this->db->select('id_brand,brands.id_image');
        $this->db->from('products');
        $this->db->distinct();
        $this->db->join('brands', 'brands.id = products.id_brand');
        $query = $this->db->get();
        return $query->result_array();
    }
}