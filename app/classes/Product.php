<?php


namespace App\classes;


class Product{
    protected $products = [];

    public function getAllProduct(){
        return[
            0=> [
                'id'    =>  1,
                'name'  =>  'T-Shirt',
                'category'=> 'Man Fashion',
                'brand' => 'Yellow',
                'price' =>  '3500',
                'description' =>    'ABCD',
                'image' => 'p1.jpg'
            ],
            1=> [
                'id'    =>  2,
                'name'  =>  'T-Shirt',
                'category'=> 'Woman Fashion',
                'brand' => 'Yellow',
                'price' =>  '3500',
                'description' =>    'ABCD',
                'image' => 'p2.jpg'
            ],
            2=> [
                'id'    =>  3,
                'name'  =>  'Smart Watch',
                'category'=> 'Electronics',
                'brand' => 'Rolex',
                'price' =>  '13500',
                'description' =>    'ABCD',
                'image' => 'p3.jpg'
            ],
            3=> [
                'id'    =>  4,
                'name'  =>  'Phone',
                'category'=> 'Man Fashion',
                'brand' => 'Samsung',
                'price' =>  '5500',
                'description' =>    'ABCD',
                'image' => 'a4.jpg'
            ],
        ];
    }

    public function getProductById($id){
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product){
            if($product['id'] == $id){
                return $product;
            }
        }
    }
}