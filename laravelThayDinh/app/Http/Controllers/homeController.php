<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hello = "Hello Cao";
        $name = "Người dùng Laravel";
        $age = 25;
        $city = "Hà Nội";
        return view('home', ['hello' => $hello, 'name' => $name, 'age' => $age, 'city' => $city]); // trả về view home.blade.php
    }
}
