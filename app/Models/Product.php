<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllProduct(){

        return [
            0 => [
                'id'            => '1',
                'name'          => 'Pant',
                'description'   => 'Blog Description',
                'price'         => '1000 tk',
                'image'         => asset('/img/pant.png'),
                'brand'         => 'H&M',
                'category'      => 'Men'
            ],
            1 => [
                'id'            => '2',
                'name'          => 'Shirt',
                'description'   => 'Blog Description',
                'price'         => '1500 tk',
                'image'         => asset('/img/shirt.png'),
                'brand'         => 'EASY',
                'category'      => 'Men'
            ],
            2 => [
                'id'            => '3',
                'name'          => 'Hoodie',
                'description'   => 'Blog Description',
                'price'         => '2300 tk',
                'image'         => asset('/img/hoodie.png'),
                'brand'         => 'EASY',
                'category'      => 'Men'
            ],
            3 => [
                'id'            => '4',
                'name'          => 'Shoes',
                'description'   => 'Blog Description',
                'price'         => '3000 tk',
                'image'         => asset('/img/shoes.png'),
                'brand'         => 'Apex',
                'category'      => 'Men'
            ],
            4 => [
                'id'            => '5',
                'name'          => 'Watch',
                'description'   => 'Blog Description',
                'price'         => '2300 tk',
                'image'         => asset('/img/watch.png'),
                'brand'         => 'Rolex',
                'category'      => 'Men'
            ],
            5 => [
                'id'            => '6',
                'name'          => 'Canon DSLR',
                'description'   => 'Blog Description',
                'price'         => '30000 tk',
                'image'         => asset('/img/canon.png'),
                'brand'         => 'Canon',
                'category'      => 'Men'
            ],
        ];
    }
}
