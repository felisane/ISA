<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
    private $products = [
        ['id' => 1, 'name' => 'Vestido Floral', 'price' => 120.0, 'stock' => 10],
        ['id' => 2, 'name' => 'Saia Jeans', 'price' => 80.0, 'stock' => 5],
        ['id' => 3, 'name' => 'Blusa de Seda', 'price' => 95.0, 'stock' => 8],
    ];

    public function get_all() {
        return $this->products;
    }
}
