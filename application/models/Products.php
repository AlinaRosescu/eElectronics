<?php

class Products extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function getProduct($id) {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('products.id', $id);
        $this->db->join('categories', 'categories.id = products.id_category', 'left');
        $query = $this->db->get();
        $product = $query->row_array();
        return $product;
    }

    public function getProducts($limit = 6,$offset = 0) {
        $this->db->from('products');
        $this->db->limit($limit,$offset);
        $query = $this->db->get();
        $products = $query->result_array();
        return $products;
    }

    public function getLastProducts($limit= 5) {
        $this->db->from('products');
        $this->db->order_by('id', 'desc');
        $this->db->limit($limit,0);
        $query = $this->db->get();
        $lastProducts = $query->result_array();
        return $lastProducts;
    }

    public function getPaging() {
        $this->load->library('pagination');
        $config['base_url'] = base_url().'shoplist';
        $config['total_rows'] = $this->getTotal();
        $config['per_page'] = 6;
        $config['page_query_string'] = true;
        $config['use_page_numbers'] = true;
        $config['query_string_segment'] = 'pagina';
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "</a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $this->pagination->initialize($config);
        return $this->pagination->create_links();
    }

    public function getTotal() {
        $this->db->from('products');
        return $this->db->count_all_results();
    }
}