<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH . 'controllers/Webshop.php');

class Cart extends Webshop {

    public function index()
    {
        $this->load->model('products');
        //$this->session->sess_destroy();


        $id =  $this->input->post('id_product_cart');
        $name =  $this->input->post('name_cart');
        $price =  $this->input->post('price_cart');
        $idImage =  $this->input->post('id_image_cart');

        if(!empty($id)) {
            $cart_products = $this->checkInCart($id,$name,$price,$idImage);
            print_r($this->session->all_userdata());
        } else {
            $cart_products = $this->session->userdata('cart_products');
        }




        $products = $this->products->getProducts(4, 0);

        $data = array('titlu' => 'shopping cart', 'products' => $products, 'cart_products' => $cart_products);

        $this->load->view('header',$data);
        $this->load->view('cart',$data);
        $this->load->view('footer');
    }

    public function checkInCart($cart_products, $id,$name,$price,$idImage) {

            foreach($cart_products as &$cart_product) {
                if($id == $cart_product['id_product']) {
                    $cart_products['quantity'] ++;
                }else {

                    $cart_products = $this->addInCart($id,$name,$price,$idImage);
                }
            }


        return $cart_products;
    }

    public function addInCart($id,$name,$price,$idImage) {
        $cart_products[] = [
            'id_product' => $id,
            'name' => $name,
            'price' => $price,
            'id_image' => $idImage,
            'quantity' => 1
        ];
        $this->session->set_userdata('cart_products', $cart_products);
        return $cart_products;
    }
}
