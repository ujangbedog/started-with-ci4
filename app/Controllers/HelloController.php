<?php

namespace App\Controllers;

class HelloController extends BaseController
{
    public function index()
    {
        return view('hello_world');
    }
}
