<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function inicio2()
    {
        return view('inicio2');
    }
    public function inicio()
    {
        return view('inicio');
    }
}
