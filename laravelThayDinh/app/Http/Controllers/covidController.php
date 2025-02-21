<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CovidController extends Controller
{
    public function getData() {
        $data = file_get_contents('https://jsonplaceholder.typicode.com/posts');
        $data = json_decode($data, true);
        return view('covid', ['data' => $data]);
    }
}