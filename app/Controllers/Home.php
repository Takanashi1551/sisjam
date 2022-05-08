<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function inicio(){
        return view('inicio');
    }
}

?>