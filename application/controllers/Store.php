<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {
    public function index()
    {
        $items = [
            ['name' => 'Camisa Floral', 'category' => 'Roupas', 'price' => 19.99, 'image' => 'https://via.placeholder.com/150'],
            ['name' => 'Calças Jeans', 'category' => 'Roupas', 'price' => 29.99, 'image' => 'https://via.placeholder.com/150'],
            ['name' => 'Tênis Esportivos', 'category' => 'Calçados', 'price' => 49.99, 'image' => 'https://via.placeholder.com/150'],
            ['name' => 'Relógio Clássico', 'category' => 'Acessórios', 'price' => 99.99, 'image' => 'https://via.placeholder.com/150'],
        ];

        $query = $this->input->get('q');
        $category = $this->input->get('category');

        $filtered = array_filter($items, function ($item) use ($query, $category) {
            $match = true;
            if ($query) {
                $match = stripos($item['name'], $query) !== false;
            }
            if ($match && $category && $category !== 'all') {
                $match = $item['category'] === $category;
            }
            return $match;
        });

        $data['items'] = $filtered;
        $data['query'] = $query;
        $data['category'] = $category;
        $data['categories'] = [
            'all' => 'Todas',
            'Roupas' => 'Roupas',
            'Calçados' => 'Calçados',
            'Acessórios' => 'Acessórios'
        ];

        $this->load->view('storefront', $data);
    }
}
