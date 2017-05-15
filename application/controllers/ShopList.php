<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH . 'controllers/Webshop.php');

class ShopList extends Webshop {

    public function index()
    {
        $this->load->model('products');
        $this->load->model('brands');

        $offset = !empty($_GET['pagina']) ? ($_GET['pagina'] - 1) * 6 : 0;
        $products = $this->products->getProducts(6,$offset);
        $brands = $this->brands->getBrands();
        $paging = $this->products->getPaging();

        $data = array(
            'titlu' 	=> 'product list',
            'products' 	=> $products,
            'brands'    => $brands,
            'paging'	=> $paging
        );

        $this->load->view('header',$data);
        $this->load->view('shoplist',$data);
        $this->load->view('footer');
    }
}
