<?php
namespace coding\app\controllers;

use coding\app\models\Orders;

class ordersController extends Controller{
    function newOrder(){
        $this->view('new_Order');
    }
    function listAll(){
        $Order=new Orders();
        $allOrders=$Order->getAll();
     

        $this->view('list_Order');

    }
    public function store(){
       
    }

} 
?>