<?php
namespace coding\app\controllers;

use coding\app\models\Home;
use coding\app\models\Books;
use coding\app\models\Category;

class HomeController extends Controller{
    
    public function index()
    {$categories=new Category();
        $allCategories=$categories->getAll();

        $books=new Books();
        $allbooks=$books->getAll();

        $data=["books" => $allbooks,
        "categories" =>$allCategories
            ];
   
        $this->view('library', $data);
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