<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
    private $products = [
        [
            'id' => 1,
            'name' => 'Shopping Bag',
            'price' => 59.99,
            'stock' => 15,
            'description' => 'Durable bag for everyday use.',
            'image' => 'https://via.placeholder.com/300?text=Bag',
            'category' => 'accessories',
            'on_sale' => true,
        ],
        [
            'id' => 2,
            'name' => 'Warming T-shirt',
            'price' => 39.99,
            'stock' => 20,
            'description' => 'Soft cotton t-shirt to keep you warm.',
            'image' => 'https://via.placeholder.com/300?text=T-shirt',
            'category' => 'clothes',
            'on_sale' => true,
        ],
        [
            'id' => 3,
            'name' => 'Basic Shirt',
            'price' => 70.00,
            'stock' => 25,
            'description' => 'Classic shirt for all occasions.',
            'image' => 'https://via.placeholder.com/300?text=Shirt',
            'category' => 'clothes',
            'on_sale' => false,
        ],
        [
            'id' => 4,
            'name' => 'Sweater Unisex',
            'price' => 32.45,
            'stock' => 20,
            'description' => 'Cozy green sweater for everyone.',
            'image' => 'https://via.placeholder.com/300?text=Sweater',
            'category' => 'clothes',
            'on_sale' => false,
        ],
    ];

    public function get_all() {
        return $this->products;
    }

    public function get($id) {
        foreach ($this->products as $p) {
            if ($p['id'] == $id) {
                return $p;
            }
        }
        return null;
    }

    public function get_on_sale() {
        return array_values(array_filter($this->products, function ($p) {
            return !empty($p['on_sale']);
        }));
    }

    /**
     * Busca produtos pelo nome e filtra por faixa de preço.
     *
     * @param string $term Termo de pesquisa.
     * @param float|null $min_price Preço mínimo.
     * @param float|null $max_price Preço máximo.
     * @return array Lista de produtos filtrados.
     */
    public function search($term = '', $min_price = null, $max_price = null) {
        $term = strtolower($term);

        return array_values(array_filter($this->products, function ($p) use ($term, $min_price, $max_price) {
            if ($term && strpos(strtolower($p['name']), $term) === false) {
                return false;
            }
            if ($min_price !== null && $p['price'] < (float) $min_price) {
                return false;
            }
            if ($max_price !== null && $p['price'] > (float) $max_price) {
                return false;
            }

            return true;
        }));
    }
}
