<?php
namespace coding\app\controllers;

use coding\app\models\Books;

class BooksController extends Controller{
    function newbooks(){
        $this->view('new_books');
    }
    function listAll(){
        $books=new Books();
        $allbookss=$books->getAll();
        //print_r($allbookss);

        $this->view('list_books',$allbookss);

    }
    public function createbooks(){
       
    }

}
?>