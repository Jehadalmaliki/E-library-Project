<?php
namespace coding\app\controllers;

use coding\app\models\offers;

class offersController extends Controller{
    function newoffers(){
        $this->view('new_offers');
    }
    function listAll(){
        $offers=new offers();
        $allofferss=$offers->getAll();
        //print_r($allofferss);

        $this->view('list_offers',$allbookss);

    }
    public function createbooks(){
       
    }

} 
?>