<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $t = "Hello World";
        $m = "Created using Blade template";

        return view('index', ['title' => $t, 'message' => $m]);
    }
}
