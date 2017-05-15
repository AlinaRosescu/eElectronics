<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH . 'controllers/Webshop.php');

class Product extends Webshop {

    public function index()
    {
        $this->load->model('products');

        $id_product = $this->uri->segment(2);
        $product = $this->products->getProduct($id_product);
        $products = $this->products->getProducts(4, 0);

        $data = array('titlu' => 'product details', 'product' => $product, 'products' => $products);

        $this->load->view('header',$data);
        $this->load->view('product',$data);
        $this->load->view('footer');
    }
}
