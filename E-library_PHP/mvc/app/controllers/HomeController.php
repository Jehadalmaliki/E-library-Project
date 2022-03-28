<?php

namespace App\Controllers;

use App\Controllers\Controller;

class HomeController extends Controller
{

   
    public function index()
    {
   
        $this->view('library');
    }

    public function cart()
    {
        $this->view('cart');
    }

    public function catogrypag()
    {
        $this->view('catogrypag');
    }
    public function details()
    {
        $this->view('detailspag');
    }

    public function checkout()
    {
        $this->view('formstep');
    }
}