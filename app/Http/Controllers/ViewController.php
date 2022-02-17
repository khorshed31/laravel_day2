<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    private $city;
    private $name;
    private $data = [];
    private $data1 = [];
    private $products;
    public function index(){

        return view('test');
    }
    public function bitm(){

        $this->city = 'dhaka';
        $this->name = 'Khorshed';
        $this->data = [
            10,20,30,'BITM',12.5,true
        ];
        $this->data1 = [
            0=> [
                'name'      => 'Khorshed',
                'city'      => 'Dhaka',
                'mobile'    => "12565886"
            ],
            1=> [
                'name'      => 'Emon',
                'city'      => 'Meherpur',
                'mobile'    => "875765768"
            ],
        ];
        return view('demo', [
            'a' => $this->city,
            'b' => $this->name,
            'c' => $this->data,
            'd' => $this->data1,
        ]);
    }
    public function about(){

        $this->products = Product::getAllProduct();

        return view('about', ['products' => $this->products]);
    }
    public function contact(){

        return view('contact');
    }
    public function detail($id){

        $this->products = Product::getAllProduct();
        foreach ($this->products as $item){

            if ($item['id'] == $id){
                return view('detail', ['data' => $item]);
            }
        }
    }
}
