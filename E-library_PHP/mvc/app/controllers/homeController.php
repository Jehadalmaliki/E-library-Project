<?php
namespace coding\app\controllers;

use coding\app\models\Home;

class HomeController extends Controller{
    
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
?>