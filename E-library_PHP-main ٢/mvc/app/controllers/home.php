<?php
require_once 'controller.php';
class Home extends Controller{

    function __construct()
    {
        
    }

    function index(){

        $this->view("library");

    }
    
   

}
?>