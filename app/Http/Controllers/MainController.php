<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex(){
        return view('home');
    } 

 public function showArray(){
$array=[
    ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => '/img/1.jpg'],
    ['id' => 2, 'title' => 'продукт 2', 'price' => 500, 'path' => '/img/2.jpg'],
    ['id' => 3, 'title' => 'продукт 3', 'price' => 500, 'path' => '/img/3.jpg'],
    ['id' => 4, 'title' => 'продукт 4', 'price' => 500, 'path' => '/img/4.jpg']
];
return view('array', compact('array'));

    }
}
