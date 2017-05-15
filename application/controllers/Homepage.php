<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH . 'controllers/Webshop.php');

class Homepage extends Webshop {

    public function index()  {

        $this->load->model('brands');
        $this->load->model('products');


        $brands = $this->brands->getBrands();
        $lastProducts = $this->products->getLastProducts();


        $data = array('titlu' => 'homepage', 'brands' => $brands, 'lastproducts' => $lastProducts);

        $this->load->view('header',$data);
        $this->load->view('homepage', $data);
        $this->load->view('footer');
    }

}
