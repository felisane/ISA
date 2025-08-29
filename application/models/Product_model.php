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
